import React, { useEffect } from 'react';
import ReactDOM from 'react-dom';
import TransferenciaApp from './TransferenciaApp';

const VerApp = () => {
    let app = document.getElementById("vermiapp") ?
    JSON.parse(document.getElementById("vermiapp").getAttribute("app")) : null;
    let transferencias = document.getElementById("vermiapp") ?
    JSON.parse(document.getElementById("vermiapp").getAttribute("transferencias")) : null;
    useEffect(() => {
        document.getElementById("vermiapp").removeAttribute("app");
        document.getElementById("vermiapp").removeAttribute("transferencias");
    }, [app]);
    return (
        <>
            <div className="container w-sm-100">
                <div className="grid grid-cols-1 justify-items-center">
                    <div className="card w-100 shadow-sm">
                        <div className="card-header h4 text-gray-400 m-0">{app.nombre}</div>
                        <div className="card-body">
                            <div>
                                <table className="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Email</th>
                                            <th>Monto</th>
                                            <th>Dinero en Cuenta</th>
                                            <th>Tipo</th>
                                            <th>Modo</th>
                                            <th>Acción</th>
                                            <th>Tiempo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {
                                            transferencias === null
                                            ? ( <tr><td colSpan="6">{datos}</td></tr> )
                                            : ( transferencias.map((el)=><TransferenciaApp key={el.id} modo={app.modo} el={el} />) )
                                        }
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
};

export default VerApp;

if(document.getElementById("vermiapp"))
ReactDOM.render(<VerApp/>, document.getElementById("vermiapp"));
