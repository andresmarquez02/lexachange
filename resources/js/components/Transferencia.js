import React from 'react';

const transferencia = ({el,usuario}) => {
    return (
        <>
            {
                usuario !== null ?
                (
                    <tr>
                        <td>{el.email}</td>
                        <td>{el.monto}</td>
                        <td>
                            {
                                el.id_receptor === usuario.id ?
                                (el.monto_total_cuenta_receptor) :
                                (el.monto_total_cuenta_emisor)
                            }
                        </td>
                        <td>
                            {
                                el.id_emisor === usuario.id ?
                                (el.comision) :
                                ("")
                            }
                        </td>
                        <td>{el.tipo}</td>
                        <td>{
                             el.id_receptor === usuario.id ? ("Credito") : ("Debito")
                        }</td>
                        <td>{el.tiempo}</td>

                    </tr>
                ) :
                (<tr><td colSpan="6">Error inesperado, recargue la pagina</td></tr>)
            }
        </>
    );
};

export default transferencia;
