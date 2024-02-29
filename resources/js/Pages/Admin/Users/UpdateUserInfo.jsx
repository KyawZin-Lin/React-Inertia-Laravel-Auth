import Table from "@/Components/Table";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/react";
import UpdateForm from "../Partials/UpdateForm";


export default function UpdateUserInfo({ auth,user }) {

    return (
        <AuthenticatedLayout
            user={auth.admin}
            header={
                <h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Dashboard
                </h2>
            }
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <UpdateForm user={user}/>



                </div>
            </div>
        </AuthenticatedLayout>
    );
}
