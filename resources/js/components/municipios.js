import { values } from 'lodash';
import React , { useState, useEffect} from 'react'
import ReactDOM from 'react-dom';
import axios from 'js/axios';

const initialValues= {
    estado_id:'',
}
export const municipios = ()=> {
//export const municipios({municipios}) {

    const peticionMunicipio=async () => {

        base = 'http://localhost/hcm2/public/reactPeticionCombo/'
        const response = await axios.post(base, 
            {
                "estado_id":values.estado_id,
            })
            console.log(response.data)
    }
    return (
       <select className="form-control" >
           mun.map(mun = '<option key = {mun.id_municipio}>{mun.nom_municipio}</option>')
       </select>
    );
}

export default municipios;

if (document.getElementById('municipios')) {
    ReactDOM.render(<municipios />, document.getElementById('municipios'));
}
