import React from 'react';

const DineroApp = ({app}) => {
    return (
        <div className="bg-gray-100 p-6 uppercase text-center">
            <h3 className="h5 font-weight-bold text-gray-700">APLICACION {app.app}</h3>
            <p className="text-gray-400">{app.monto}lx</p>
        </div>
    );
};

export default DineroApp;
