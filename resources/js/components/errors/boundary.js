import React from 'react';

export default class ErrorBoundary extends React.Component {
    constructor(props) {
        super(props);
        
        this.state = {
            error: false
        }
    }

    static getDerivedStateFromError(error) {
        return { 
            error: true
        }
    }

    componentDidCatch(error, errorInfo) {
        console.error("ErrorBoundary caught an error", error, errorInfo);
    }

    render() {
        if (this.state.error) {
            return <h1>Something went wrong.</h1>;
        }

        return this.props.children;
    }
}