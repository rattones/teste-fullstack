import React, { useEffect, useState } from 'react'
import api from '../services/api'

import './lista.css'

const Lista = () => {

  const [ cadastros, setCadastros ]= useState([])

  useEffect(()=> {
    api.get('/cadastros')
      .then((response) => {
        console.log(response.data)
        setCadastros(response.data)
      })
  }, [])

  function formataData(data) {
    data= data.split('-')
    return `${data[2]}/${data[1]}/${data[0]}`
  }

  return (
    <div className="lista" id="lista">
      <span className="titulo">LISTA DE CADASTRO</span>
      <table>
        <thead>
          <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Nascimento</th>
            <th>Telefone</th>
          </tr>
        </thead>
        <tbody>
        {cadastros.map((cadastro)=> (<tr key={cadastro.id}>
            <td>{cadastro.nome}</td>
            <td>{cadastro.email}</td>
            <td>{formataData(cadastro.data_nascimento)}</td>
            <td>{cadastro.telefone}</td>
          </tr>)
        )}
        </tbody>
      </table>
    </div>
  )
}

export default Lista
