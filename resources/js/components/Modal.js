import React from 'react';

const Modal = ({Form,titulo,id}) => {
    return (
        <div className="modal fade" id={id} tabIndex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div className="modal-dialog" role="document">
                <div className="modal-content">
                    <div className="modal-header">
                        <h5 className="modal-title">{titulo}</h5>
                            <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div className="modal-body">
                        {Form}
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Modal;
