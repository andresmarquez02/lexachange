import React from 'react';

const FormNew = () => {
    let token = document.querySelector("meta[name=csrf-token]") ?
    document.querySelector("meta[name=csrf-token]").getAttribute("content") : "";
    return (
        <form action="./crear/app" method="post">
            <input type="hidden" name="_token" defaultValue={token}/>
            <div className="grid grid-cols-2 gap-3">
                <div className="form-group">
                    <label htmlFor="">Nombre</label>
                    <input type="text" name="nombre" className="form-control" />
                </div>
                <div className="form-group">
                    <label htmlFor="">Modo</label>
                    <select name="modo" className="form-control">
                        <option value="0">Selecciona...</option>
                        <option value="1">Prueba</option>
                        <option value="2">Producción</option>
                    </select>
                </div>
            </div>
            <div className="modal-footer">
                <button type="button" className="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" className="btn btn-warning">Guardar</button>
            </div>
        </form>
    );
};

export default FormNew;
