import React from 'react';
import ReactDOM from 'react-dom';

const Retirar = () => {
    const nou = () => {
        alertify.error("El monto de su cuenta es menor al de retiro minimo");
    }
    return (
        <>
            <div className="container w-sm-100">
                <div className="grid grid-cols-1 ">
                    <div className="card">
                        <div className="card-header h2 m-0"></div>
                        <div className="card-body">
                            <div>Monto de retiro minimo: 40.000 LX</div>
                            <div className="grid md:grid-cols-4 sm:grid-cols-2 gap-2">
                                <div className="text-center bg-gray-100 shadow-sm py-2" onClick={nou}>Uphoald</div>
                                <div className="text-center bg-gray-100 shadow-sm py-2" onClick={nou}>Paypal</div>
                                <div className="text-center bg-gray-100 shadow-sm py-2" onClick={nou}>Payeer</div>
                                <div className="text-center bg-gray-100 shadow-sm py-2" onClick={nou}>Coinbase</div>
                                <div className="text-center bg-gray-100 shadow-sm py-2" onClick={nou}>Bitcoin</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}
export default Retirar;

if(document.getElementById('retirar'))
ReactDOM.render(<Retirar/>, document.getElementById('retirar'));

