import Dashboard from './dashboard/dashboard.vue';
import AboutUs from './abouts/about-us.vue';
import Project from './projects/project.vue';
import ContactUs from './contacts/contact-us.vue';

import ServiceSoftware from './services/software.vue';
import ServiceGraphicDesign from './services/graphic-design.vue';

import ServiceBusinessCard from './services/business-card.vue';

import ServiceChatbot from './services/chatbot.vue';
import ServiceDigital from './services/digital-marketing.vue';
import ServiceSEO from './services/seo.vue';
import ServiceCTEM from './services/training-event.vue';
import ServiceConsultancy from './services/consultancy.vue';
import ServiceMaintenance from './services/maintenance.vue';

// import ServiceHome from './services/service-home.vue';
// Idagdag ang iba pang mga imports para sa iba pang mga serbisyo
import NotFound from './404/error.vue';

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
    }
];
