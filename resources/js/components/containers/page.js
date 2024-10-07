import NavBar from '../navbars/default';

export default function PageContainer({ children }) {
    return (
        <>
            <NavBar/>
            <main>{children}</main>
        </>
    )
}