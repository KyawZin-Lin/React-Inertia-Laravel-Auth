import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import WhoAreU from './WhoAreU';

export default function Dashboard({ auth }) {
    // console.log(auth);
    return (
        <AuthenticatedLayout
            user={auth.admin}
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2>}
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <WhoAreU auth={auth}/>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
