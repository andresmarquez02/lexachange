import React, { useState,useEffect } from 'react';
import ReactDOM from 'react-dom';
import Modal from './Modal'
import FormNew from './FormNew'
import App from './App'

const Apps = () => {
    let error = "Cargando...";
    let token = "";
    const [url, seturl] = useState(0);
    let [apps, setapps] = useState(null);
    const reloadapp = () =>{
        seturl(url + 1);
    }
    useEffect(() => {
        const peticion = async () => {
            if(document.querySelector("meta[name=csrf-token]")){
                token = document.querySelector("meta[name=csrf-token]").getAttribute("content");
                try {
                    const c = await fetch("./mis/apps", {
                        method: "POST",
                        headers:{"X-CSRF-TOKEN": token}
                    });
                    if(c.status != 200)throw{error:true}
                    const r = await c.json();
                    r.forEach(element => {
                        setapps(element);
                    });
                } catch (error) {
                    if(error)peticion();
                }
            }
        }
        peticion();
    }, [url]);
    setTimeout(() => {
        apps === null ? error = "Aun no tienes apps agregadas" : "";
    }, 7000);
    return (
        <div className="container w-sm-100">
            <div className="grid grid-cols-1">
                <div className="card">
                    <div className="card-header"></div>
                    <div className="card-body">
                        <div className="grid justify-items-end pb-3">
                            <button type="button" className="btn btn-warning" data-toggle="modal" data-target="#modelId">Crear app</button>
                        </div>
                        <div className="grid md:grid-cols-3 sm:grid-cols-2 gap-3">
                            {
                                apps === null ? (
                                    <h1 className="h4 text-bg-gray-200 text-center" style={{gridColumn:"1 / 4"}}>{error}</h1>
                                ) : (
                                    apps.map((el) => <App key={el.id} app={el} reload={reloadapp} />)
                                )
                            }
                        </div>
                    </div>
                    <Modal titulo={"Crear aplicacion"} id={"modelId"} Form={<FormNew/>} />
                </div>
            </div>
        </div>
    );
};

export default Apps;
if(document.getElementById("apps"))
ReactDOM.render(<Apps />, document.getElementById("apps"));
