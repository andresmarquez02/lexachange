import React, { useState } from 'react';
import alertify from '../alertify'
import FormEdit from './FormEdit'
import Modal from './Modal'

const App = ({app,reload}) => {
    let token = document.querySelector("meta[name=csrf-token]") ?
    document.querySelector("meta[name=csrf-token]").getAttribute("content") : "";
    const eliminar = async id => {
        const c = await fetch("eliminar/app/"+id,{method:"POST",headers:{"X-CSRF-TOKEN": token}});
        if(c.ok)
        {
            reload();
            alertify.success("Aplicaion eliminada con exito")
        }
        else alertify.error("Error inesperado intenta de nuevo");
    }
    return (
        <>
            <div className="container w-sm-100 bg-gray-100 shadow-sm p-3">
                <div>
                    <div className="flex">
                        <div className="break-all">
                            <p>{app.nombre}</p>
                            <small>Api key: {app.api_key}</small><br/>
                            <small>modo: {app.modo == 1 ? "Prueba" : "Produccion"}</small>
                        </div>
                    </div>
                    <div className="pt-2 flex justify-between">
                        <a href={"./ver app/"+app.id} className="btn btn-primary btn-sm">Ver</a>
                        <button type="button" className="btn btn-light btn-sm" data-toggle="modal" data-target={"#model"+app.id}>Editar</button>
                        <button type="button" onClick={()=> eliminar(app.id)} className="btn btn-danger btn-sm">Eliminar</button>
                    </div>
                </div>
            </div>
            <Modal Form={<FormEdit app={app} />} titulo={"Editar aplicacion"} id={"model"+app.id}/>
        </>
    );
};

export default App;
