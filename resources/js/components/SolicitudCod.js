import React, { useRef } from 'react';
const Solicitud = (props) => {
    const ip = useRef();
    return(
        <div className="grid grid-cols-1">
            <div className="card">
                <div className="card-header h4 m-0 text-gray-500">Solictud de Ip para transferencias</div>
                <div className="card-body text-gray-600">
                    <form action="" method="post">
                        <div className="grid grid-cols-2 gap-3">
                            <div>
                                <p ref={ip}>{props.ip ? (props.ip) :
                                (<a href="./solicitud/cod" className="btn btn-warning">Solicitar</a>)
}</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    );
}

export default Solicitud;
