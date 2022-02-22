import React from 'react';

const Opciones = ({el}) => {
    return (
        <>
            <option value={el.id}>{el.tipo}</option>
        </>
    );
};

export default Opciones;
