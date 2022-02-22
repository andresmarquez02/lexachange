import React from 'react';

const TransferenciaApp = ({el,modo}) => {
    return (
        <>
                    <tr>
                        <td>{el.email}</td>
                        <td>{el.monto}</td>
                        <td>
                            {el.monto_total_cuenta_receptor}
                        </td>
                        <td>{el.tipo}</td>
                        <td>{modo === 1 ? "Prueba" : "Produccion"}</td>
                        <td>
                            Debito
                        </td>
                        <td>{el.tiempo}</td>
                    </tr>
        </>
    );
};

export default TransferenciaApp;
