import React from 'react';

import styles from './NavigationItems.module.css';
import NavigationItem from './NavigationItem/NavigationItem';

const navigationItems = () => (
    <ul className={styles.NavigationItems}>
        <NavigationItem link="/" active>Mėsainio kūrimas</NavigationItem>
        <NavigationItem link="/">Užsakymai</NavigationItem>
    </ul>
);

export default navigationItems;