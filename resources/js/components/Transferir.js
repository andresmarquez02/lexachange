import React, { useRef, useState } from 'react';
import ReactDOM from 'react-dom';
import {useFetchPost} from '../helpers/useFetchPost';
import Opciones from './Opciones';

const Transferir = () => {
    const ref = useRef();
    let {recibo,isPending} = useFetchPost("tipos");
    let val = /^.{1,200}$/;
    let submit = false;
    let token = document.querySelector("meta[name=csrf-token]").getAttribute("content") ?
    document.querySelector("meta[name=csrf-token]").getAttribute("content") : '';
    const handleSubmit = e => {
        if(submit == false)e.preventDefault();
        for(let i = 0; i < ref.current.elements.length -1; i++){
            if(val.test(ref.current.elements[i].value)){
                submit = true;
            }
            else{
                console.log(ref.current.elements[i]);
                submit = false;
                let help = document.querySelectorAll("#helpId");
                help.forEach(elm => {
                    elm.textContent = "Ninguno de los campos pueden estar vacios";
                    elm.classList.remove("d-none");
                });
                break;
            }
        }
        if(submit)ref.current.submit();
    }
    return (
        <>
            <div className="container w-sm-100">
                <div className="grid grid-cols-1 justify-items-center">
                    <div className="card w-100">
                        <div className="card-header h4 text-gray-700 m-0">Datos de Trasferencia</div>
                        <div className="card-body">
                            <form action="" method="post" ref={ref} onSubmit={handleSubmit}>
                                <input type="hidden" defaultValue={token} name="_token"/>
                                <div className="grid md:grid-cols-2 sm:grid-cols-1 gap-2">
                                    <div className="form-group">
                                        <label htmlFor="">Correo a depositar</label>
                                        <input type="email" name="correo_depositar"  className="form-control" />
                                        <small id="helpId" className="text-danger d-none">Help text</small>
                                    </div>
                                    <div className="form-group">
                                        <label htmlFor="">Ip cuenta depositar</label>
                                        <input type="text" name="ip_depositar"  className="form-control" />
                                        <small id="helpId" className="text-danger d-none">Help text</small>
                                    </div>
                                </div>
                                <div className="grid md:grid-cols-3 sm:grid-cols-1 gap-2">
                                    <div className="form-group">
                                        <label htmlFor="">Monto</label>
                                        <input type="number" name="monto"  className="form-control" />
                                        <small id="helpId" className="text-danger d-none">Help text</small>
                                    </div>
                                    <div className="form-group">
                                        <label htmlFor="">Tipo</label>
                                        <select class="form-control" name="tipo">
                                            {recibo === null ? ( <option>Cargando...</option> ) : (recibo.map((el)=><Opciones key={el.id} el={el}/>)) }
                                        </select>
                                        <small id="helpId" className="text-danger d-none">Help text</small>
                                    </div>
                                    <div className="form-group">
                                        <label htmlFor="">Tu contraseña</label>
                                        <input type="password" name="contrasena"  className="form-control" />
                                        <small id="helpId" className="text-danger d-none">Help text</small>
                                    </div>
                                </div>
                                <div className="form-group grid grid-cols-1 justify-items-center">
                                    <button type="submit" className="btn btn-warning">Transferir</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}

export default Transferir;

if(document.getElementById("transferir"))
ReactDOM.render(<Transferir/>, document.getElementById("transferir"));
