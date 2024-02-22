import Dashboard from './dashboard/index.vue';
import AboutUs from './abouts/about-us.vue';
import Project from './projects/project.vue';
import ContactUs from './contacts/contact-us.vue';

// Services
import ServiceSoftware from './services/software.vue';
import ServiceGraphicDesign from './services/graphic-design.vue';
import ServiceBusinessCard from './services/business-card.vue';
import ServiceChatbot from './services/chatbot.vue';
import ServiceDigital from './services/digital-marketing.vue';
import ServiceSEO from './services/seo.vue';
import ServiceCTEM from './services/training-event.vue';
import ServiceConsultancy from './services/consultancy.vue';
import ServiceMaintenance from './services/maintenance.vue';

// projects
import ProjectTripidkard from './projects/tripidkard.vue';

// import NotFound from './404/error.vue';


// Admin Dashboard

import AdminDashboard from './pages/admin/dashboard.vue';
import AdminProjects from './pages/admin/projects.vue';
import AdminServices from './pages/admin/services.vue';
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



];
