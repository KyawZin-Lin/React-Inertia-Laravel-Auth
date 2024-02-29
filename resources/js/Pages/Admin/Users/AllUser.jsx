import Table from "@/Components/Table";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/react";

export default function AllUser({ auth, users }) {
    const columns = ["Id", "Name", "Email", "Action"];
    const actions = [
        { type: 'edit', route: 'admin.users.edit' },
        { type: 'delete', route: 'admin.users.delete' },
      ];

    return (
        <AuthenticatedLayout
            user={auth.admin}
            header={
                <h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Users
                </h2>
            }
        >
            <Head title="Users" />
            <div className="flex flex-row-reverse gap-2 ">
                <a
                    href={route('admin.users.create')}
                    className=" bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                >
                    Create User
                </a>
            </div>
            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <Table
                        columns={columns}
                        users={users}
                        // action="admin.users.edit"
                        actions={actions}
                    />
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
