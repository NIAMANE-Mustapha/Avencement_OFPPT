import React, { useEffect, useState } from 'react'
export default function AvencementParModule() {
    const [moduleData,setModuleData]=useState([])
    useEffect(()=>{
        fetch("http://127.0.0.1:8000/api/AvancementParModule").then(res=>res.json()).then(data=>setModuleData(data))
    },[])
  return (
    <div>
    <h1 className="text-center text-blue-600 text-3xl font-bold my-8 uppercase tracking-wider">
      Avancement Par Module
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
            <th className="py-3 px-3">Code Module</th>
            <th className="py-3 px-3">Module</th>
            <th className="py-3 px-3">Régional</th>
            <th className="py-3 px-3">MH Totale</th>
            <th className="py-3 px-3">MH Réalisée</th>
            <th className="py-3 px-3">% de Réalisation</th>
            <th className="py-3 px-3">Ecart</th>
            <th className="py-3 px-3">Ecart en %</th>
          </tr>
        </thead>
        <tbody>
          {moduleData.map((module, index) => (
            <tr
              key={index}
              className={`text-center ${index % 2 === 0 ? "bg-gray-50" : "bg-white"} hover:bg-blue-50 transition-all duration-200`}
            >
              <td className="py-3 px-3">{module.groupe.filiere.formation.niveau_formation}</td>
              <td className="py-3 px-3">{module.groupe.filiere.secteur}</td>
              <td className="py-3 px-3">{module.groupe.filiere.code_filiere}</td>
              <td className="py-3 px-3">{module.groupe.filiere.nom_filiere}</td>
              <td className="py-3 px-3">{module.groupe.filiere.formation.type_formation}</td>
              <td className="py-3 px-3">{module.groupe.filiere.formation.creneau}</td>
              <td className="py-3 px-3">{module.groupe.nom_groupe}</td>
              <td className="py-3 px-3">{module.groupe.effectif_groupe}</td>
              <td className="py-3 px-3">{module.groupe.annee_formation}</td>
              <td className="py-3 px-3">{module.groupe.filiere.formation.mode_formation}</td>
              <td className="py-3 px-3">{module.module.code_module}</td>
              <td className="py-3 px-3">{module.module.nom_module}</td>
              <td className="py-3 px-3">{module.module.regional}</td>
              <td className="py-3 px-3">{module.module.MHT_total}</td>
              <td className="py-3 px-3">{module.total_MHT_realisées}</td>
              <td className="py-3 px-3">{((module.total_MHT_realisées / module.module.MHT_total) * 100).toFixed(2)}%</td>
              <td className="py-3 px-3">{module.module.MHT_total - module.total_MHT_realisées}</td>
              <td className="py-3 px-3">{(((module.module.MHT_total - module.total_MHT_realisées) / module.module.MHT_total) * 100).toFixed(2)}%</td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  </div>

);

}
