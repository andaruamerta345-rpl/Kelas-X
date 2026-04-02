import { Outlet, Link, useNavigate } from 'react-router-dom';
import { useAuth } from '../contexts/AuthContext';
import { LogOut, Home, Briefcase, Award, User } from 'lucide-react';

export default function MainLayout() {
  const { user, logout } = useAuth();
  const navigate = useNavigate();

  const handleLogout = async () => {
    await logout();
    navigate('/login');
  };

  return (
    <div className="min-h-screen bg-slate-100 flex flex-col md:flex-row font-sans">
      {/* Premium Dark Sidebar */}
      <aside className="w-full md:w-72 bg-slate-900 border-r border-slate-800 flex flex-col shadow-2xl z-20">
        <div className="p-6 border-b border-white/10 text-center">
          <h1 className="text-2xl font-black bg-clip-text text-transparent bg-gradient-to-r from-indigo-400 to-purple-400">
            Andaru Portfolios
          </h1>
        </div>
        
        <nav className="flex-1 p-4 space-y-2 mt-4">
          {user ? (
            <>
              <Link to="/dashboard" className="flex items-center gap-3 p-3 text-slate-300 hover:bg-white/10 hover:text-white rounded-xl transition-all group">
                <Home size={20} className="group-hover:text-indigo-400 transition-colors" /> Dashboard
              </Link>
              <Link to="/skills" className="flex items-center gap-3 p-3 text-slate-300 hover:bg-white/10 hover:text-white rounded-xl transition-all group">
                <Award size={20} className="group-hover:text-purple-400 transition-colors" /> Skills
              </Link>
              <Link to="/portfolios" className="flex items-center gap-3 p-3 text-slate-300 hover:bg-white/10 hover:text-white rounded-xl transition-all group">
                <Briefcase size={20} className="group-hover:text-pink-400 transition-colors" /> Portfolios
              </Link>
            </>
          ) : (
            <>
              <Link to="/login" className="flex items-center gap-3 p-3 text-slate-300 hover:bg-white/10 hover:text-white rounded-xl transition-all group">
                <User size={20} className="group-hover:text-indigo-400 transition-colors" /> Login
              </Link>
              <Link to="/register" className="flex items-center gap-3 p-3 text-slate-300 hover:bg-white/10 hover:text-white rounded-xl transition-all group">
                <User size={20} className="group-hover:text-purple-400 transition-colors" /> Register
              </Link>
            </>
          )}
        </nav>

        {user && (
          <div className="p-4 border-t border-white/10">
            <button 
              onClick={handleLogout}
              className="flex items-center justify-center gap-2 w-full p-3 bg-red-500/10 text-red-400 font-medium rounded-xl hover:bg-red-500 hover:text-white transition-all shadow-lg"
            >
              <LogOut size={18} /> Logout Account
            </button>
          </div>
        )}
      </aside>

      {/* Main Content Area */}
      <main className="flex-1 p-6 md:p-10 overflow-y-auto relative">
        <div className="absolute top-0 right-0 w-full h-64 bg-gradient-to-b from-indigo-100/50 to-transparent pointer-events-none" />
        <div className="max-w-5xl mx-auto relative z-10">
          <Outlet />
        </div>
      </main>
    </div>
  );
}
