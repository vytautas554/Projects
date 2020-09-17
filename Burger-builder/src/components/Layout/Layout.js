import React, { Component } from 'react';

import File from '../../hoc/File/File';
import styles from './Layout.module.css';
import Toolbar from '../Navigation/Toobar/Toolbar';
import SideDrawer from '../Navigation/SideDrawer/SideDrawer';

class Layout extends Component {
    state = {
        showSideDrawer: false
    }

    SideDrawerClosedHandler = () => {
        this.setState({showSideDrawer: false});
    }

    sideDrawerToggleHandler = () => {
        this.setState(prevState => {
            return {showSideDrawer: !prevState.showSideDrawer}
        });
    }

    render () {
        return (
            <File>
                <Toolbar drawerToggleClicked={this.sideDrawerToggleHandler}/>
                <SideDrawer 
                open={this.state.showSideDrawer}
                closed={this.SideDrawerClosedHandler}/>
                <main className={styles.Content}>
                    {this.props.children}
                </main>
            </File>)
    }
}

export default Layout;