import React, { useState } from 'react'

export default function DataUpload() {
    const [file, setFile] = useState();
    const [message, setMessage] = useState("");

    const handleUpload = () => {
        if (!file) {
            setMessage("Please select a file.");
            return;
        }

        const data = new FormData();
        data.append("file", file); // Appending the file to FormData

        fetch('http://127.0.0.1:8000/api/adddata', {
            method: "POST",
            headers: { "content-type": "application/json" },
            body: data, // Use FormData as the body, it will set the correct content-type automatically
        })
        .then((response) => response.json())
        .then((result) => {
            if (result.success) {
                setMessage("File uploaded successfully!");
            } else {
                setMessage(result.message || "Upload failed.");
            }
        })
        .catch((error) => {
            console.error("Upload error:", error);
            setMessage("An error occurred while uploading.");
        });
    }

    return (
        <div>
            <input type="file" onChange={(e) => setFile(e.target.files[0])} />
            <button onClick={handleUpload}>Upload</button>
            {message && <p>{message}</p>}
        </div>
    );
}
