import React, { useState, useEffect } from 'react';

export const useFetchPost = (url) => {
    const [recibo, setRecibo] = useState(null);
    const [isPending, setIsPending] = useState(true);
    useEffect(() => {
        const peticion = async () => {
            let token = "";
            if(document.querySelector("meta[name=csrf-token]")){
                token = document.querySelector("meta[name=csrf-token]").getAttribute("content");
                try {
                    const c = await fetch(url, {
                        method: "POST",
                        headers:{"X-CSRF-TOKEN": token}
                    });
                    if(c.status != 200)throw{error:true}
                    const r = await c.json();
                    r.forEach(element => {
                        setRecibo(element);
                    });
                    setIsPending(false);
                } catch (error) {
                    if(error)peticion();
                }
            }
            else{
                setRecibo({});
            }
        }
        peticion();
    }, [url]);
    return {recibo,isPending}
}
