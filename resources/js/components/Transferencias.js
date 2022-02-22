import React from 'react';
import ReactDOM from 'react-dom';
import {useData} from '../helpers/useData';
import Transferencia from './Transferencia';

const Transferencias = () => {
    let usuario = useData("transferencias","usuario").data;
    let transferencias = useData("transferencias","transferncias").data;
    let datos = "Cargando transferencias...";
    setTimeout(()=>{datos = "No tienes transferencias realizadas"},6000);
    return(
        <>
            <table className="table table-striped table-responsive">
               <thead>
                   <tr>
                       <th>Email</th>
                       <th>Monto</th>
                       <th>Dinero en Cuenta</th>
                       <th>Comision</th>
                       <th>Tipo</th>
                       <th>Acción</th>
                       <th>Tiempo</th>
                   </tr>
               </thead>
               <tbody>
                   {
                       transferencias === null
                       ? ( <tr><td colSpan="6">{datos}</td></tr> )
                       : ( transferencias.map((el)=><Transferencia key={el.id} el={el} usuario={usuario} />) )
                   }
               </tbody>
            </table>
        </>
    );
}
export default Transferencias;

if(document.getElementById("transferencias"))
ReactDOM.render(<Transferencias />, document.getElementById("transferencias"));
