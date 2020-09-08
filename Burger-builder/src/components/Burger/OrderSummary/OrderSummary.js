import React, { Component } from 'react';

import Aux from '../../../hoc/File';
import Button from '../../UI/Button/Button';

class OrderSummary extends Component {

    componentDidUpdate() {
        console.log('[OrderSummary] DidUpdate');
    }
    
    render () {
        const ingredientSummary = Object.keys(this.props.ingredients)
        .map(igKey => {
            return (
                <li key={igKey}>
                    <span style={{textTransform: 'capitalize'}}>{igKey}</span>: {this.props.ingredients[igKey]}
                </li>
            );
        });

        return (
            <Aux>
                <h3>Jūsų užsakymas</h3>
                <p>Mėsainis su jūsų pasirinktais ingredientais:</p>
                <ul>
                    {ingredientSummary}
                </ul>
                <p><strong>Galutinė kaina: {this.props.price.toFixed(2)}</strong></p>
                <p>Tęsti užsakymą?</p>
                <Button btnType="Danger" clicked={this.props.purchaseCancelled}>ATŠAUKTI</Button>
                <Button btnType="Success" clicked={this.props.purchaseContinued}>TĘSTI</Button>
            </Aux>
        );
    }
}

export default OrderSummary;