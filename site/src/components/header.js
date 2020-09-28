import React from 'react'

import './header.css'
import logo from '../assets/logo.svg'
import topo from '../assets/icones/topo-pag.svg'

export default function Header() {
  return (
    <div className="header" id="header">
      <a href="#header"><img src={topo} className="topo-action" alt="Volte ao Topo" /></a>
      <div className="top">
        <img src={logo} alt="Logo" />
        <div className="menu">
          <ul>
            <li><a href="#form">cadastro</a></li>
            <li><a href="#lista">lista</a></li>
            <li><a href="#footer">sobre mim</a></li>
          </ul>
        </div>
      </div>
      <div className="titulo">
        <span className="tit-principal">ESTÁGIO</span>
        <span className="tit-secundario">PROVA DE SELEÇÃO</span>
      </div>
    </div>
  )
}

