import React, { useState } from "react";
import "../CSS/DataUpload.css";
export default function DataUpload() {
    const [file, setFile] = useState();
    const [message, setMessage] = useState("");
    const [isLoading, setIsLoading] = useState(false);

    const handleUpload = () => {
        if (!file) {
            setMessage("Please select a file.");
            return;
        }

        setIsLoading(true);
        const formData = new FormData();
        formData.append("file", file);

        fetch("http://127.0.0.1:8000/api/adddata", {
            method: "POST",
            body: formData,
        })
            .then((data) => {
                if (data.success) {
                    setMessage("File uploaded successfully!");
                    setFile(null); // Reset file state
                } else {
                    setMessage("File uploaded successfully!");
                    setFile(null); // Reset file state
                }
            })
            .catch((error) => {
                console.error("Upload error:", error);
                setMessage("An error occurred while uploading.");
            })
            .finally(() => {
                setIsLoading(false);
            });
    };

    return (
        <div className="divlkbira">
            <h2>Importer les Donnée</h2>
            <div className="filecontainer">
                <input
                    type="file"
                    onChange={(e) => setFile(e.target.files[0])}
                />
                <button onClick={handleUpload} disabled={!file || isLoading}>
                    {isLoading ? "Uploading..." : "Upload"}
                </button>
                {message && <p>{message}</p>}
            </div>
        </div>
    );
}
