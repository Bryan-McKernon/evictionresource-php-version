import React from 'react';
import "./Specific_Area_Served.css";

const Specific_Area_Served = (props) => {
    
    const load_url = () => {
        window.open(props.url_link);
    }

    return (
        <div>
            <div className="Specific_Area_Served_Container" onClick={load_url}>
                <div className="Specific_Area_Served_Title">{props.title}</div>
            </div>
        </div>
    )
}

export default Specific_Area_Served;