import { useState, useEffect } from 'react';
import { Link } from 'react-router-dom';
import api from '../services/api';
import { ExternalLink, User, ArrowRight, Globe, Mail } from 'lucide-react';
import { motion } from 'framer-motion';

export default function Home() {
  const [data, setData] = useState({ profile: null, skills: [], portfolios: [] });
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    const fetchPublicData = async () => {
      try {
        const [profileRes, skillsRes, portfoliosRes] = await Promise.all([
          api.get('/profile/public').catch(() => ({ data: { success: false } })),
          api.get('/skills'),
          api.get('/portfolios')
        ]);
        
        setData({
          profile: profileRes.data.success ? profileRes.data.data : null,
          skills: skillsRes.data.success ? skillsRes.data.data : [],
          portfolios: portfoliosRes.data.success ? portfoliosRes.data.data : [],
        });
      } catch (error) {
        console.error("Error fetching public portfolio", error);
      } finally {
        setLoading(false);
      }
    };

    fetchPublicData();
  }, []);

  if (loading) {
    return (
      <div className="min-h-screen flex items-center justify-center bg-slate-50 text-indigo-500">
        <motion.div 
          animate={{ scale: [1, 1.2, 1], opacity: [0.5, 1, 0.5] }}
          transition={{ repeat: Infinity, duration: 1.5 }}
          className="text-2xl font-bold tracking-widest uppercase"
        >
          Loading...
        </motion.div>
      </div>
    );
  }

  const { profile, skills, portfolios } = data;

  const containerVariants = {
    hidden: { opacity: 0 },
    visible: {
      opacity: 1,
      transition: { staggerChildren: 0.2 }
    }
  };

  const itemVariants = {
    hidden: { y: 20, opacity: 0 },
    visible: { y: 0, opacity: 1, transition: { duration: 0.6, ease: "easeOut" } }
  };

  return (
    <div className="min-h-screen bg-slate-50 overflow-hidden relative">
      {/* Background Decorators */}
      <div className="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-purple-400/20 blur-[120px] pointer-events-none" />
      <div className="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-indigo-400/20 blur-[120px] pointer-events-none" />

      {/* Header */}
      <header className="fixed top-0 w-full z-50 glass border-b-0 border-white/20">
        <div className="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
          <motion.h1 
            initial={{ opacity: 0, x: -20 }}
            animate={{ opacity: 1, x: 0 }}
            className="text-2xl font-black premium-gradient-text tracking-tight"
          >
            {profile?.name || 'Portfolio'}
          </motion.h1>
          <motion.div
            initial={{ opacity: 0, x: 20 }}
            animate={{ opacity: 1, x: 0 }}
          >
            <Link 
              to="/login"
              className="px-5 py-2 rounded-full text-sm font-bold bg-slate-900 text-white hover:bg-slate-800 transition shadow-lg shadow-slate-900/20 flex items-center gap-2 group"
            >
              Admin <ArrowRight size={16} className="group-hover:translate-x-1 transition-transform" />
            </Link>
          </motion.div>
        </div>
      </header>

      <main className="pt-32 pb-20 px-6 max-w-6xl mx-auto relative z-10">
        
        {/* Hero Section */}
        <motion.section 
          variants={containerVariants}
          initial="hidden"
          animate="visible"
          className="text-center py-20 lg:py-32"
        >
          <motion.div variants={itemVariants} className="relative inline-block mb-8">
            <div className="absolute inset-0 premium-gradient-bg rounded-full blur-2xl opacity-40 animate-float-delayed"></div>
            {profile?.foto ? (
              <img 
                src={profile.foto} 
                alt={profile.name} 
                className="w-48 h-48 lg:w-56 lg:h-56 object-cover rounded-full mx-auto border-4 border-white shadow-2xl relative z-10 animate-float"
              />
            ) : (
              <div className="w-48 h-48 lg:w-56 lg:h-56 bg-slate-100 text-slate-300 rounded-full mx-auto border-4 border-white shadow-2xl flex items-center justify-center relative z-10 animate-float">
                <User size={80} />
              </div>
            )}
          </motion.div>
          
          <motion.h2 variants={itemVariants} className="text-5xl lg:text-7xl font-extrabold text-slate-900 mb-6 tracking-tight">
            Hi, I'm <br className="md:hidden"/>
            <span className="premium-gradient-text">{profile?.name || 'A Developer'}</span>
          </motion.h2>
          
          <motion.h3 variants={itemVariants} className="text-2xl lg:text-3xl text-slate-600 font-medium max-w-3xl mx-auto mb-10">
            {profile?.cita_cita || 'Crafting digital experiences through code and design.'}
          </motion.h3>
          
          {profile?.bio && (
            <motion.p variants={itemVariants} className="max-w-2xl mx-auto text-lg text-slate-500 leading-relaxed mb-12">
              {profile.bio}
            </motion.p>
          )}

          <motion.div variants={itemVariants} className="flex justify-center gap-4">
            <a href="#projects" className="px-8 py-4 rounded-full premium-gradient-bg text-white font-bold shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:-translate-y-1 transition-all">
              View Projects
            </a>
            <a href="#contact" className="px-8 py-4 rounded-full bg-white text-slate-900 font-bold shadow-md hover:shadow-lg hover:-translate-y-1 transition-all border">
              Contact Me
            </a>
          </motion.div>
        </motion.section>

        {/* Skills Section */}
        {skills.length > 0 && (
          <motion.section 
            initial={{ opacity: 0, y: 50 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true, margin: "-100px" }}
            transition={{ duration: 0.7 }}
            className="py-20"
          >
            <div className="text-center mb-16">
              <h3 className="text-sm font-bold tracking-widest text-indigo-500 uppercase mb-2">Expertise</h3>
              <h4 className="text-4xl font-extrabold text-slate-900">Technical Skills</h4>
            </div>
            
            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
              {skills.map((skill, index) => (
                <motion.div 
                  key={skill.id}
                  initial={{ opacity: 0, scale: 0.9 }}
                  whileInView={{ opacity: 1, scale: 1 }}
                  viewport={{ once: true }}
                  transition={{ delay: index * 0.1, duration: 0.5 }}
                  className="glass p-6 rounded-2xl group hover:-translate-y-2 transition-all duration-300"
                >
                  <div className="flex justify-between items-end mb-4">
                    <span className="font-bold text-lg text-slate-800">{skill.name}</span>
                    <span className="text-sm font-black text-slate-400 group-hover:text-indigo-500 transition-colors">
                      {skill.level}%
                    </span>
                  </div>
                  <div className="w-full bg-slate-100 rounded-full h-3 overflow-hidden shadow-inner">
                    <motion.div 
                      initial={{ width: 0 }}
                      whileInView={{ width: `${skill.level}%` }}
                      viewport={{ once: true }}
                      transition={{ duration: 1, delay: 0.2 + (index * 0.1), ease: "easeOut" }}
                      className="premium-gradient-bg h-full rounded-full"
                    />
                  </div>
                </motion.div>
              ))}
            </div>
          </motion.section>
        )}

        {/* Portfolio Section */}
        {portfolios.length > 0 && (
          <motion.section 
            id="projects"
            initial={{ opacity: 0, y: 50 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true, margin: "-100px" }}
            transition={{ duration: 0.7 }}
            className="py-20"
          >
            <div className="text-center mb-16">
              <h3 className="text-sm font-bold tracking-widest text-purple-500 uppercase mb-2">Selected Works</h3>
              <h4 className="text-4xl font-extrabold text-slate-900">Featured Projects</h4>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
              {portfolios.map((project, index) => (
                <motion.div 
                  key={project.id}
                  initial={{ opacity: 0, y: 30 }}
                  whileInView={{ opacity: 1, y: 0 }}
                  viewport={{ once: true }}
                  transition={{ delay: index * 0.2, duration: 0.6 }}
                  className="glass p-8 rounded-3xl group hover:shadow-2xl hover:shadow-indigo-500/10 transition-all duration-500 flex flex-col h-full relative overflow-hidden"
                >
                  <div className="absolute top-0 right-0 w-32 h-32 premium-gradient-bg opacity-5 group-hover:opacity-10 transition-opacity rounded-bl-full" />
                  
                  <h4 className="text-2xl font-bold text-slate-900 mb-4 z-10">{project.title}</h4>
                  <p className="text-slate-600 mb-8 leading-relaxed flex-1 z-10">{project.description}</p>
                  
                  {project.link && (
                    <div className="mt-auto z-10">
                      <a 
                        href={project.link}
                        target="_blank"
                        rel="noopener noreferrer"
                        className="inline-flex items-center gap-2 px-6 py-3 bg-slate-900 text-white font-semibold rounded-xl hover:bg-indigo-600 transition-colors shadow-md"
                      >
                        View Live Project <ExternalLink size={18} />
                      </a>
                    </div>
                  )}
                </motion.div>
              ))}
            </div>
          </motion.section>
        )}

      </main>

      {/* Footer */}
      <footer id="contact" className="border-t border-slate-200 mt-20 relative z-10 glass">
        <div className="max-w-6xl mx-auto px-6 py-12 flex flex-col md:flex-row justify-between items-center gap-6">
          <div>
            <h2 className="text-2xl font-black premium-gradient-text">{profile?.name || 'Portfolio'}</h2>
            <p className="text-slate-500 mt-2">Building digital products, brands, and experience.</p>
          </div>
          
          <div className="flex gap-4">
            <a href="#" className="w-12 h-12 bg-white rounded-full flex items-center justify-center text-slate-600 hover:text-indigo-600 hover:shadow-lg transition-all border border-slate-100">
              <Globe size={20} />
            </a>
            <a href="mailto:hello@example.com" className="w-12 h-12 bg-white rounded-full flex items-center justify-center text-slate-600 hover:text-indigo-600 hover:shadow-lg transition-all border border-slate-100">
              <Mail size={20} />
            </a>
          </div>
        </div>
      </footer>
    </div>
  );
}
