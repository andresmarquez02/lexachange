import React, { useState,useEffect,useRef } from 'react';
import ReactDOM from 'react-dom';
import {useFetchPost} from "../helpers/useFetchPost";
import Solicitud from './SolicitudCod';
import Confirmar from './ConfirmarContrasena';

const Perfil = () => {
    const [token, setToken] = useState(null);
    const [input, setInput] = useState({});
    let {recibo,isPending} = useFetchPost("usuario");
    let regular = {
        l: /^[a-zA-ZÁ-ÿá-ÿ\s]{0,200}$/,
        c: /^.{1,200}$/
    }
    let validado = false;
    const submit = useRef();
    useEffect(() => {
        if(document.querySelector("meta[name=csrf-token]"))
            setToken(document.querySelector("meta[name=csrf-token]").getAttribute("content"));
    }, []);
    const handleNombre = e => {
        if(regular.l.test(e.target.value))setInput({...input,[e.target.name]: e.target.value});
        else e.target.value = input.name;
    }
    const handleContrasena = e => {
        if(regular.c.test(e.target.value)) setInput({...input,[e.target.name]: e.target.value});
    }
    const handleContrasena2 = e => {
        if(regular.c.test(e.target.value)) return "ok";
    }
    const handleSubmit = e => {
        if(validado == false)e.preventDefault();
        if(input[0] !== undefined){
            validado = true;
            submit.current.click();
            console.log("paso if", input);
        }
        else{
            let help = document.querySelectorAll('#helpId');
            help.forEach(el => {
                el.textContent = "Edite algo para guardar";
                el.classList.remove("d-none");
            });
        }
    }
    return (
        <div className="container w-sm-100">
            <div className="grid grid-cols-1 justify-items-center">
                <div className="card w-100">
                    <div className="card-header h4 m-0 text-gray-500">Editar Información</div>
                    <div className="card-body text-gray-600">
                        <form action="./perfil" method="post" onSubmit={handleSubmit}>
                            <input type="hidden" defaultValue={token} name="_token" />
                            <div className="grid md:grid-cols-2 sm:grid-cols-1 gap-3">
                                <div className="form-group">
                                  <label htmlFor="">Nombres</label>
                                  <input type="text" name="name" defaultValue={recibo !== null ? recibo.name : ""} className="form-control" placeholder={recibo !== null ? recibo.name : "Cargando..."} onChange={handleNombre} />
                                  <small id="helpId" className="text-danger d-none">Help text</small>
                                </div>
                                <div className="form-group">
                                    <label htmlFor="">Nueva Contraseña</label>
                                    <input type="password" name="contrasena"  className="form-control" onChange={handleContrasena}  />
                                    <small id="helpId" className="text-danger d-none">Help text</small>
                                </div>
                                <div className="form-group">
                                    <label htmlFor="">Confirmar Nueva Contraseña</label>
                                    <input type="password" name="contrasena_confirmation"  className="form-control" onChange={handleContrasena}  />
                                    <small id="helpId" className="text-danger d-none">Help text</small>
                                </div>
                            </div>
                            <Confirmar Contrasena={handleContrasena2} submit={submit}/>
                            <div className="grid justify-items-center">
                                <button type="button" className="btn btn-warning" data-toggle="modal" data-target="#modelId">
                                  Guardar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <Solicitud ip={recibo !== null ? recibo.ip : ""} />
        </div>
    );
}

export default Perfil;

if(document.getElementById('perfil'))
ReactDOM.render(<Perfil/>, document.getElementById('perfil'));

