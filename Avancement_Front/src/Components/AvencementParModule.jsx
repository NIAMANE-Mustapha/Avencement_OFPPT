import React, { useEffect, useState } from 'react'

export default function AvencementParModule() {
    const [moduleData,setModuleData]=useState([])
    useEffect(()=>{
        fetch("http://127.0.0.1:8000/api/AvancementParModule").then(res=>res.json()).then(data=>setModuleData(data))
    },[])
  return (
    <div>
        <table>
    <thead>
        <tr>
            <th>Niveau</th>
            <th>Secteur</th>
            <th>Code Filière</th>
            <th>Filière</th>
            <th>Type de Formation</th>
            <th>Créneau</th>
            <th>Groupe</th>
            <th>Effectif Groupe</th>
            <th>Année de Formation</th>
            <th>Mode</th>
            <th>Code Module</th>
            <th>Module</th>
            <th>Régional</th>
            <th>MH Totale</th>
            <th>MH Réalisée</th>
            <th>% Réalisation</th>
            <th>Écart</th>
            <th>Écart en %</th>
        </tr>
    </thead>
    <tbody>
        {moduleData.map((module, index) => (
            <tr key={index}>
                <td>{module.groupe.filiere.niveau_formation}</td>
                <td>{module.groupe.filiere.secteur}</td>
                <td>{module.groupe.filiere.code_filiere}</td>
                <td>{module.groupe.filiere.nom_filiere}</td>
                <td>{module.groupe.filiere.type_formation}</td>
                <td>{module.groupe.creneau}</td>
                <td>{module.groupe.nom_groupe}</td>
                <td>{module.groupe.effectif_groupe}</td>
                <td>{module.groupe.annee_formation}</td>
                <td>{module.groupe.filiere.mode_formation}</td>
                <td>{module.module.code_module}</td>
                <td>{module.module.nom_module}</td>
                <td>{module.module.regional}</td>
                <td>{module.module.MHT_total}</td>
                <td>{module.total_MHT_realisées}</td>
                <td>{module.total_MHT_realisées / module.module.MHT_total}</td>
                <td>{module.module.MHT_total - module.total_MHT_realisées}</td>
                <td>
                    {(module.module.MHT_total - module.total_MHT_realisées) / module.total_MHT_realisées}
                </td>
            </tr>
        ))}
    </tbody>
</table>
    </div>
  )
}
