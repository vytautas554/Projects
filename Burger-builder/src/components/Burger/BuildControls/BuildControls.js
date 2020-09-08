import React from 'react';

import styles from './BuildControls.module.css';
import BuildControl from './BuildControl/BuildControl';

const controls = [
    { label: 'Salota', type: 'salota' },
    { label: 'Kiauliena', type: 'kiauliena' },
    { label: 'Sūris', type: 'sūris' },
    { label: 'Mėsa', type: 'mėsa' },
];

const buildControls = (props) => (
    <div className={styles.BuildControls}>
        <p>Galutinė kaina: <strong>{props.price.toFixed(2)}</strong></p>
        {controls.map(ctrl =>(
            <BuildControl 
            key={ctrl.label} 
            label={ctrl.label}
            added={() => props.ingredientAdded(ctrl.type)}
            removed={() => props.ingredientRemoved(ctrl.type)}
            disabled={props.disabled[ctrl.type]}/>
        ))}
        <button 
        className={styles.OrderButton}
        disabled={!props.purchasable}
        onClick={props.ordered}>UŽSAKYTI DABAR</button>
    </div>
);

export default buildControls;