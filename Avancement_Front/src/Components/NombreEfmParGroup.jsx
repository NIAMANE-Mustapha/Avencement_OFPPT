import React, { useEffect, useState } from "react";

export default function NombreEfmParGroup() {
    const [data, setData] = useState([]);
    useEffect(() => {
        fetch("http://127.0.0.1:8000/api/NombreEfmParGroup")
            .then((res) => res.json())
            .then((data) => setData(data));
    }, []);

    return (
        <div>
  <h1 className="text-center text-blue-600 text-3xl font-bold my-8 uppercase tracking-wider">
    Nombre EFM par Groupes
  </h1>

  <div className="container mx-auto p-6">
    <table className="w-full border-collapse shadow-lg rounded-lg overflow-hidden">
      <thead>
        <tr className="bg-gradient-to-r from-blue-600 to-blue-500 text-white text-center text-sm font-semibold uppercase">
          <th className="py-3 px-2">Niveau</th>
          <th className="py-3 px-2">Secteur</th>
          <th className="py-3 px-2">Code Filière</th>
          <th className="py-3 px-2">Filière</th>
          <th className="py-3 px-2">Type de Formation</th>
          <th className="py-3 px-2">Créneau</th>
          <th className="py-3 px-2">Groupe</th>
          <th className="py-3 px-2">Effectif Groupe</th>
          <th className="py-3 px-2">Année de Formation</th>
          <th className="py-3 px-2">Mode</th>
          <th className="py-3 px-2">Code Module</th>
          <th className="py-3 px-2">Module</th>
          <th className="py-3 px-2">EFM Local</th>
          <th className="py-3 px-2">EFM Régional</th>
        </tr>
      </thead>
      <tbody>
        {data.map((module, index) => (
          <tr
            key={index}
            className={`text-center ${index % 2 === 0 ? "bg-gray-50" : "bg-white"} hover:bg-blue-50 transition-all duration-200`}
          >
            <td className="py-3 px-2">{module.groupe.filiere.formation.niveau_formation}</td>
            <td className="py-3 px-2">{module.groupe.filiere.secteur}</td>
            <td className="py-3 px-2">{module.groupe.filiere.code_filiere}</td>
            <td className="py-3 px-2">{module.groupe.filiere.nom_filiere}</td>
            <td className="py-3 px-2">{module.groupe.filiere.formation.type_formation}</td>
            <td className="py-3 px-2">{module.groupe.filiere.formation.creneau}</td>
            <td className="py-3 px-2">{module.groupe.nom_groupe}</td>
            <td className="py-3 px-2">{module.groupe.effectif_groupe}</td>
            <td className="py-3 px-2">{module.groupe.annee_formation}</td>
            <td className="py-3 px-2">{module.groupe.filiere.formation.mode_formation}</td>
            <td className="py-3 px-2">{module.module.code_module}</td>
            <td className="py-3 px-2">{module.module.nom_module}</td>
            <td className="py-3 px-2">{module.module.regional === "N" ? "Oui" : "Non"}</td>
            <td className="py-3 px-2">{module.module.regional === "O" ? "Oui" : "Non"}</td>
          </tr>
        ))}
      </tbody>
    </table>
  </div>
</div>

    );
}
