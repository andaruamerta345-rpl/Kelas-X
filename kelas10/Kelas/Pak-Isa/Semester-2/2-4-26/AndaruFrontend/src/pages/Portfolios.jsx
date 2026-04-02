import { useState, useEffect } from 'react';
import api from '../services/api';
import toast from 'react-hot-toast';
import { Trash2, ExternalLink } from 'lucide-react';

export default function Portfolios() {
  const [portfolios, setPortfolios] = useState([]);
  const [title, setTitle] = useState('');
  const [description, setDescription] = useState('');
  const [link, setLink] = useState('');
  
  const [loading, setLoading] = useState(true);
  const [adding, setAdding] = useState(false);

  useEffect(() => {
    fetchPortfolios();
  }, []);

  const fetchPortfolios = async () => {
    try {
      const response = await api.get('/portfolios');
      if (response.data.success) {
        setPortfolios(response.data.data);
      }
    } catch (error) {
      toast.error('Failed to load portfolios');
    } finally {
      setLoading(false);
    }
  };

  const handleAddPortfolio = async (e) => {
    e.preventDefault();
    if (!title || !description) return;
    
    setAdding(true);
    try {
      const response = await api.post('/portfolios', { title, description, link });
      if (response.data.success) {
        toast.success('Portfolio added!');
        setPortfolios([...portfolios, response.data.data]);
        setTitle('');
        setDescription('');
        setLink('');
      }
    } catch (error) {
      toast.error('Failed to add portfolio');
    } finally {
      setAdding(false);
    }
  };

  const handleDelete = async (id) => {
    if (!confirm('Are you sure you want to delete this portfolio?')) return;
    
    try {
      await api.delete(`/portfolios/${id}`);
      toast.success('Portfolio deleted');
      setPortfolios(portfolios.filter(p => p.id !== id));
    } catch (error) {
      toast.error('Failed to delete portfolio');
    }
  };

  if (loading) return <div className="text-center py-20 text-gray-500">Loading portfolios...</div>;

  return (
    <div className="bg-white rounded-xl shadow-sm border p-6">
      <h2 className="text-2xl font-bold mb-6 text-gray-800">Your Portfolios</h2>
      
      {/* Add New Portfolio Form */}
      <form onSubmit={handleAddPortfolio} className="space-y-4 mb-10 bg-gray-50 p-6 rounded-lg border">
        <h3 className="font-semibold text-gray-700">Add New Project</h3>
        <div>
          <label className="block text-sm font-medium text-gray-700 mb-1">Project Title</label>
          <input 
            type="text" 
            required
            className="w-full p-2.5 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
            value={title}
            onChange={(e) => setTitle(e.target.value)}
          />
        </div>
        <div>
          <label className="block text-sm font-medium text-gray-700 mb-1">Description</label>
          <textarea 
            required
            className="w-full p-2.5 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none min-h-[100px]"
            value={description}
            onChange={(e) => setDescription(e.target.value)}
          ></textarea>
        </div>
        <div>
          <label className="block text-sm font-medium text-gray-700 mb-1">Link (Optional)</label>
          <input 
            type="text" 
            className="w-full p-2.5 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
            value={link}
            onChange={(e) => setLink(e.target.value)}
            placeholder="https://..."
          />
        </div>
        <div className="pt-2">
          <button 
            type="submit" 
            disabled={adding}
            className="bg-blue-600 text-white font-medium px-6 py-2.5 rounded-lg hover:bg-blue-700 transition"
          >
            {adding ? 'Adding...' : 'Add Portfolio'}
          </button>
        </div>
      </form>

      {/* Portfolios List */}
      <div className="grid gap-6 md:grid-cols-2">
        {portfolios.map(portfolio => (
          <div key={portfolio.id} className="border rounded-lg p-5 flex flex-col group hover:shadow-md transition">
            <div className="flex justify-between items-start mb-3">
              <h3 className="text-lg font-bold text-gray-800">{portfolio.title}</h3>
              <button 
                onClick={() => handleDelete(portfolio.id)}
                className="text-gray-400 hover:text-red-500 hover:bg-red-50 p-2 rounded-full transition"
              >
                <Trash2 size={18} />
              </button>
            </div>
            
            <p className="text-gray-600 mb-4 flex-1 whitespace-pre-wrap">{portfolio.description}</p>
            
            {portfolio.link && (
              <a 
                href={portfolio.link}
                target="_blank"
                rel="noopener noreferrer"
                className="inline-flex items-center gap-2 text-sm text-blue-600 hover:text-blue-800 font-medium"
              >
                <ExternalLink size={16} /> View Project
              </a>
            )}
          </div>
        ))}
        
        {portfolios.length === 0 && (
          <div className="col-span-full py-8 text-center text-gray-500">
            No projects added yet. Start by adding one above!
          </div>
        )}
      </div>
    </div>
  );
}
