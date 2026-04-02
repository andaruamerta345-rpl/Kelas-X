import { useState, useEffect } from 'react';
import api from '../services/api';
import toast from 'react-hot-toast';
import { Trash2 } from 'lucide-react';

export default function Skills() {
  const [skills, setSkills] = useState([]);
  const [name, setName] = useState('');
  const [level, setLevel] = useState(50);
  const [loading, setLoading] = useState(true);
  const [adding, setAdding] = useState(false);

  useEffect(() => {
    fetchSkills();
  }, []);

  const fetchSkills = async () => {
    try {
      const response = await api.get('/skills');
      if (response.data.success) {
        setSkills(response.data.data);
      }
    } catch (error) {
      toast.error('Failed to load skills');
    } finally {
      setLoading(false);
    }
  };

  const handleAddSkill = async (e) => {
    e.preventDefault();
    if (!name) return;
    
    setAdding(true);
    try {
      const response = await api.post('/skills', { name, level });
      if (response.data.success) {
        toast.success('Skill added!');
        setSkills([...skills, response.data.data]);
        setName('');
        setLevel(50);
      }
    } catch (error) {
      toast.error('Failed to add skill');
    } finally {
      setAdding(false);
    }
  };

  const handleDelete = async (id) => {
    if (!confirm('Are you sure you want to delete this skill?')) return;
    
    try {
      await api.delete(`/skills/${id}`);
      toast.success('Skill deleted');
      setSkills(skills.filter(s => s.id !== id));
    } catch (error) {
      toast.error('Failed to delete skill');
    }
  };

  if (loading) return <div className="text-center py-20 text-gray-500">Loading skills...</div>;

  return (
    <div className="bg-white rounded-xl shadow-sm border p-6">
      <h2 className="text-2xl font-bold mb-6 text-gray-800">Your Skills</h2>
      
      {/* Add New Skill Form */}
      <form onSubmit={handleAddSkill} className="flex flex-col md:flex-row gap-4 mb-8 bg-gray-50 p-4 rounded-lg border">
        <div className="flex-1">
          <label className="block text-sm font-medium text-gray-700 mb-1">Skill Name</label>
          <input 
            type="text" 
            required
            className="w-full p-2.5 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
            value={name}
            onChange={(e) => setName(e.target.value)}
            placeholder="e.g. React.js, PHP, English"
          />
        </div>
        <div className="flex-1">
          <label className="block text-sm font-medium text-gray-700 mb-1">Proficiency Level (1-100)</label>
          <input 
            type="number" 
            min="1" max="100"
            className="w-full p-2.5 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
            value={level}
            onChange={(e) => setLevel(e.target.value)}
          />
        </div>
        <div className="flex items-end">
          <button 
            type="submit" 
            disabled={adding}
            className="bg-blue-600 text-white font-medium px-6 py-2.5 rounded-lg hover:bg-blue-700 transition w-full md:w-auto"
          >
            {adding ? 'Adding...' : 'Add Skill'}
          </button>
        </div>
      </form>

      {/* Skills List */}
      <div className="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
        {skills.map(skill => (
          <div key={skill.id} className="border rounded-lg p-4 flex items-center justify-between group hover:shadow-md transition">
            <div className="flex-1">
              <h3 className="font-semibold text-gray-800">{skill.name}</h3>
              <div className="w-full bg-gray-200 rounded-full h-2 mt-2">
                <div className="bg-blue-600 h-2 rounded-full" style={{ width: `${skill.level}%` }}></div>
              </div>
            </div>
            <button 
              onClick={() => handleDelete(skill.id)}
              className="ml-4 text-gray-400 hover:text-red-500 hover:bg-red-50 p-2 rounded-full transition"
            >
              <Trash2 size={18} />
            </button>
          </div>
        ))}
        
        {skills.length === 0 && (
          <div className="col-span-full py-8 text-center text-gray-500">
            No skills added yet. Add your first skill above!
          </div>
        )}
      </div>
    </div>
  );
}
