import coreLavakit from '@modules/base/resources/assets/js/core';
import Dashboard from './components/Dashboard';
import Layout from '@layouts/layout';

const locales = window.Lavakit.locales;
const pageTitle = window.Lavakit.pageTitle;

export default [
    {
        path: '/admin',
        name: 'admin.dashboards.index',
        component: Layout,
        beforeEnter: coreLavakit.requireAdmin,
        redirect: '/admin/dashboard',
        children: [
            {
                path: 'dashboard',
                name: 'admin.dashboards.dashboard',
                component: Dashboard,
                props: {
                    locales,
                    pageTitle
                },
            },
        ]
    }
];
