import React, { useEffect,useState } from 'react';
import ReactDOM from 'react-dom';
import {useData} from '../helpers/useData'
import DineroApp from './DineroApp';

const Balance = () => {
    let balances = useData('balance',"balances").data;
    let por_apps = useData('balance',"apps").data;
    return (
        <>
        <div className="grid grid-cols-1 justify-items-center">
            {balances !== null ? (
            <div className="card w-100">
                <div className="card-header"></div>
                <div className="card-body grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-3">
                   <div className="bg-gray-100 p-6 uppercase text-center">
                       <h3 className="h5 font-weight-bold text-gray-700">ACTUAL</h3>
                       <p className="text-gray-400">{balances.actual}lx</p>
                    </div>
                   <div className="bg-gray-100 shadow-sm p-6 uppercase text-center">
                       <h3 className="h5 font-weight-bold text-gray-700">Debitado</h3>
                       <p className="text-gray-400">{balances.transferido}lx</p>
                    </div>
                   <div className="bg-gray-100 shadow-sm p-6 uppercase text-center">
                        <h3 className="h5 font-weight-bold text-gray-700">CREDITADO</h3>
                        <p className="text-gray-400">{balances.han_transferido}lx</p>
                    </div>
                   <div className="bg-gray-100 shadow-sm p-6 uppercase text-center">
                       <h3 className="h5 font-weight-bold text-gray-700">POR APLICACIONES</h3>
                       <p className="text-gray-400">{balances.general_apps}lx</p>
                   </div>
                   <>
                        {por_apps !== null ? (por_apps.map((element,i) => <DineroApp key={i} app={element} />)) : ("")}
                   </>
                </div>
            </div>
            ): ("")}
        </div>
    </>
    )
}
export default Balance;

if (document.getElementById('balance')) {
    ReactDOM.render(<Balance />, document.getElementById('balance'));
}
