import Table from "@/Components/Table";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/react";
import CreateForm from "../Partials/CreateForm";
// import UpdateForm from "../Partials/UpdateForm";


export default function CreateUser({ auth }) {

    return (
        <AuthenticatedLayout
            user={auth.admin}
            header={
                <h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Create User
                </h2>
            }
        >
            <Head title="Create User" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">



            <CreateForm/>

                </div>
            </div>
        </AuthenticatedLayout>
    );
}
