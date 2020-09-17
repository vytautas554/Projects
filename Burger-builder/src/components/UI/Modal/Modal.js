import React, { Component } from 'react';

import styles from './Modal.module.css';
import File from '../../../hoc/File/File';
import Backdrop from '../Backdrop/Backdrop';

class modal extends Component {

    shouldComponentUpdate (nextProps, nextState) {
        return nextProps.show !== this.props.show || nextProps.children !== this.props.children;
    }

    componentDidUpdate () {
        console.log('[Modal] DidUpdate');
    }

    render () {
        return (
            <File>
                <Backdrop show={this.props.show} clicked={this.props.modalClosed}/>
                <div 
                    className={styles.Modal}
                    style={{
                        transform: this.props.show ? 'translateY(0)' : 'translateY(-100vh)',
                        opacity: this.props.show ? '1': '0'
                    }}>
                    {this.props.children}
                </div>
            </File>
        );
    }
}

export default modal;