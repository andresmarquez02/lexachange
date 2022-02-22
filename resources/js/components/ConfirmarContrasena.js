import React from 'react';
const Confirmar = (props) => {
    return (
        <div className="modal fade" id="modelId" tabIndex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div className="modal-dialog" role="document">
                <div className="modal-content">
                    <div className="modal-header">
                        <h5 className="modal-title"></h5>
                            <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div className="modal-body">
                        <div className="form-group">
                          <label htmlFor="">Contraseña actual</label>
                          <input type="password" name="contrasena_ac" className="form-control" onChange={props.Contrasena} />
                        </div>
                    </div>
                    <div className="modal-footer">
                        <button type="button" className="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" className="btn btn-warning" ref={props.submit}>Confirmar</button>
                    </div>
                </div>
            </div>
        </div>
    );
}
export default Confirmar;
