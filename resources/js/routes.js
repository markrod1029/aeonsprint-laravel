import Dashboard from './components/Frontend/dashboard/index.vue';
import AboutUs from './components/Frontend/abouts/about-us.vue';
import Project from './components/Frontend/projects/project.vue';
import ContactUs from './components/Frontend/contacts/contact-us.vue';

// Services
import ServiceSoftware from './components/Frontend/services/software.vue';
import ServiceGraphicDesign from './components/Frontend/services/graphic-design.vue';
import ServiceBusinessCard from './components/Frontend/services/business-card.vue';
import ServiceChatbot from './components/Frontend/services/chatbot.vue';
import ServiceDigital from './components/Frontend/services/digital-marketing.vue';
import ServiceSEO from './components/Frontend/services/seo.vue';
import ServiceCTEM from './components/Frontend/services/training-event.vue';
import ServiceConsultancy from './components/Frontend/services/consultancy.vue';
import ServiceMaintenance from './components/Frontend/services/maintenance.vue';

// projects
import ProjectTripidkard from './components/Frontend/projects/tripidkard.vue';

// import NotFound from './404/error.vue';


// Admin Dashboard
import AdminLogin from './pages/auth/login.vue'
import AdminDashboard from './pages/admin/dashboard/dashboard.vue';
import AdminProjects from './pages/admin/projects/projectsList.vue';
import AdminServices from './pages/admin/services/servicesList.vue';
import AdminUsers from './pages/admin/users/UserList.vue';
import AdminAppointment from './pages/admin/appointment/AppointmentList.vue';
import AdminAppointmentForm from './pages/admin/appointment/AppointmentForm.vue';
import AdminSetting from './pages/admin/settings/UpdatedSetting.vue';
import AdminProfile from './pages/admin/profiles/updateProfile.vue';

export default [
  
    {
        path: '/',
        name: 'index',
        component: Dashboard,
        meta: {
            title: 'Home'
        }
    },
    
    // {
    //     path: '*',
    //     component: NotFound

    // },
    {
        path: '/about-us',
        name: 'about-us',
        component: AboutUs,
        meta: {
            title: 'About Us'
        }
    },
    {
        path: '/projects',
        name: 'projects',
        component: Project,
        meta: {
            title: 'Project'
        }
        
    },

    {
        path: '/projects/tripidkard',
        name: 'projects.tripidkard',
        component: ProjectTripidkard,
        meta: {
            title: 'Tripidkard Project '
        }
        
    },

    // services
    {
        path: '/services/software-development',
        name: 'services.software-development',
        component: ServiceSoftware,
        meta: {
            title: 'Web App Development'
        }
    },

    {
        path: '/services/graphic-design',
        name: 'services.graphic-design',
        component: ServiceGraphicDesign,
        meta: {
            title: 'Graphic Design'
        }
    },

    {
        path: '/services/digital-business-card',
        name: 'services.digital-business-card',
        component: ServiceBusinessCard,
        meta: {
            title: 'Digital Business Card'
        }
    },

    
    {
        path: '/services/chatbot-marketing',
        name: 'services.chatbot-marketing',
        component: ServiceChatbot,
        meta: {
            title: 'Chatbot Marketing'
        }
    },



    {
        path: '/services/digital-marketing',
        name: 'services.digital-marketing',
        component: ServiceDigital,
        meta: {
            title: 'Digital Marketing'
        }
    },


    
    {
        path: '/services/seo-marketing',
        name: 'services.seo-marketing',
        component: ServiceSEO,
        meta: {
            title: 'SEO Marketing'
        }
    },

    {
        path: '/services/conference-and-training-event-managment',
        name: 'services.conference-and-training-event-managment',
        component: ServiceCTEM,
        meta: {
            title: 'Conference and Training Event Managment'
        }
    },


    {
        path: '/services/it-bpo-consultancy',
        name: 'services.it-bpo-consultancy',
        component: ServiceConsultancy,
        meta: {
            title: 'IT-BPO Consultancy'
        }
    },


    {
        path: '/services/maintenance-support',
        name: 'services.maintenance-support',
        component: ServiceMaintenance,
        meta: {
            title: 'Maintenance Support'
        }
    },


    // End of Services
    {
        path: '/contact-us',
        name: 'contact-us',
        component: ContactUs,
        meta: {
            title: 'Contact Us'
        }
    },

  


    // admin Dashboard


    {
        path: '/admin/login',
        name: 'admin.login',
        component: AdminLogin,
        meta: {
            title: 'login'
        }
    },


    {
        path: '/admin/dashboard',
        name: 'admin.dashboard',
        component: AdminDashboard,
        meta: {
            title: 'Admin Dashboard'
        }
    },

    {
        path: '/admin/projects',
        name: 'admin.projects',
        component: AdminProjects,
        meta: {
            title: 'Admin Projects'
        }
    },

    {
        path: '/admin/services',
        name: 'admin.services',
        component: AdminServices,
        meta: {
            title: 'Admin Services'
        }
    },

    {
        path: '/admin/users',
        name: 'admin.users',
        component: AdminUsers,
        meta: {
            title: 'Admin Users'
        }
    },


    {
        path: '/admin/appointments',
        name: 'admin.appointments',
        component: AdminAppointment,
        meta: {
            title: 'Admin Appointments List'
        }
    },

    {
        path: '/admin/appointments/create',
        name: 'admin.appointments/create',
        component: AdminAppointmentForm,
        meta: {
            title: 'Admin Appointments Form'
        }
    },

    {
        path: '/admin/appointments/:id/edit',
        name: 'admin.appointments.edit',
        component: AdminAppointmentForm,
        meta: {
            title: 'Admin Appointments Form'
        }
    },

    {
        path: '/admin/setting',
        name: 'admin.setting',
        component: AdminSetting,
        meta: {
            title: 'Admin Setting Form'
        }
    },

    
    {
        path: '/admin/profile',
        name: 'admin.profile',
        component: AdminProfile,
        meta: {
            title: 'Admin Profile Form'
        }
    },


];
