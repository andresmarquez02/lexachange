import React, { useEffect, useState } from 'react';

export const useData = (campo,propers) => {
    let [data,setData] = useState(null);
    useEffect(() => {
        let datos = JSON.parse(document.getElementById(campo).getAttribute(propers));
         setData(datos);
        document.getElementById(campo).removeAttribute(propers);
    }, [campo]);
    return {data};
};
