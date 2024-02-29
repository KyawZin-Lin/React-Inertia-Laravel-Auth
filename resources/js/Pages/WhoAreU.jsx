import React from "react";

export default function WhoAreU({auth}) {
    return (
        <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div className="p-6 text-gray-900 dark:text-gray-100">


              {
                auth.admin ? (
                   <div className="">
                     You're logged in as {auth.admin.name} and Role is{" "}
                    {auth.admin.role.name}!
                   </div>
                ) :(
                    <div className="">
                    You're logged in as {auth.user.name} and Role is User

                  </div>
                )
              }
            </div>
        </div>
    );
}
