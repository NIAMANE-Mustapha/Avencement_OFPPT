import React, { useEffect, useState } from 'react'

export default function AvancementParGroup() {
    const[data,setData]=useState([])
     useEffect(()=>{
            fetch("http://127.0.0.1:8000/api/AvencementParGroup").then(res=>res.json()).then(data=>setData(data))
        },[])
  return (
    <div>
    <h1 className="text-center text-blue-600 text-3xl font-bold my-8 uppercase tracking-wider">
      Etat d'avancement Programme par Groupe
    </h1>

    <div className="container mx-auto p-6">
      <table className="w-full border-collapse shadow-lg rounded-lg overflow-hidden">
        <thead>
          <tr className="bg-gradient-to-r from-blue-600 to-blue-500 text-white text-center text-sm font-semibold uppercase">
            <th className="py-3 px-3">Niveau</th>
            <th className="py-3 px-3">Secteur</th>
            <th className="py-3 px-3">Code Filière</th>
            <th className="py-3 px-3">Filière</th>
            <th className="py-3 px-3">Type de Formation</th>
            <th className="py-3 px-3">Créneau</th>
            <th className="py-3 px-3">Groupe</th>
            <th className="py-3 px-3">Effectif Groupe</th>
            <th className="py-3 px-3">Année de Formation</th>
            <th className="py-3 px-3">Mode</th>
            <th className="py-3 px-3">MH Totale (1)</th>
            <th className="py-3 px-3">MH Totale Réalisée (2)</th>
            <th className="py-3 px-3">% de Réalisation (2/1)</th>
            <th className="py-3 px-3">Ecart (1-2) (3)</th>
            <th className="py-3 px-3">Ecart en % (3/1)</th>
          </tr>
        </thead>
        <tbody>
          {data.map((row, index) => (
            <tr
              key={index}
              className={`text-center ${index % 2 === 0 ? "bg-gray-50" : "bg-white"} hover:bg-blue-50 transition-all duration-200`}
            >
              <td className="py-3 px-2">{row.Niveau}</td>
              <td className="py-3 px-2">{row.Secteur}</td>
              <td className="py-3 px-2">{row.Code_Filiere}</td>
              <td className="py-3 px-2">{row.Filiere}</td>
              <td className="py-3 px-2">{row.Type_Formation}</td>
              <td className="py-3 px-2">{row.Creneau}</td>
              <td className="py-3 px-2">{row.Groupe}</td>
              <td className="py-3 px-2">{row.Effectif_Groupe}</td>
              <td className="py-3 px-2">{row.Annee_Formation}</td>
              <td className="py-3 px-2">{row.Mode}</td>
              <td className="py-3 px-2">{row.MH_Totale}</td>
              <td className="py-3 px-2">{row.MH_Totale_Realisee}</td>
              <td className="py-3 px-2">{row.Pourcentage_Realisation}%</td>
              <td className="py-3 px-2">{row.Ecart}</td>
              <td className="py-3 px-2">{row.Ecart_Pourcentage}%</td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  </div>

  )
}
