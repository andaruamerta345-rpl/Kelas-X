import { useState, useEffect } from 'react';
import api from '../services/api';
import toast from 'react-hot-toast';

export default function Dashboard() {
  const [profile, setProfile] = useState({ bio: '', cita_cita: '', foto: '' });
  const [photoFile, setPhotoFile] = useState(null);
  const [loading, setLoading] = useState(true);
  const [saving, setSaving] = useState(false);

  useEffect(() => {
    fetchProfile();
  }, []);

  const fetchProfile = async () => {
    try {
      const response = await api.get('/profile');
      if (response.data.success && response.data.data) {
        setProfile(response.data.data);
      }
    } catch (error) {
      toast.error('Failed to load profile');
    } finally {
      setLoading(false);
    }
  };

  const handleSave = async (e) => {
    e.preventDefault();
    setSaving(true);
    
    try {
      const formData = new FormData();
      if (profile.bio) formData.append('bio', profile.bio);
      if (profile.cita_cita) formData.append('cita_cita', profile.cita_cita);
      if (photoFile) formData.append('foto', photoFile);

      const response = await api.post('/profile', formData, {
        headers: {
          'Content-Type': 'multipart/form-data'
        }
      });

      if (response.data.success) {
        toast.success('Profile updated successfully!');
        setProfile(response.data.data);
        setPhotoFile(null); // Reset file selection after save
      }
    } catch (error) {
      toast.error('Failed to save profile');
    } finally {
      setSaving(false);
    }
  };

  if (loading) return <div className="text-center py-20 text-gray-500">Loading your dashboard...</div>;

  return (
    <div className="bg-white rounded-xl shadow-sm border p-6">
      <h2 className="text-2xl font-bold mb-6 text-gray-800">Your Profile Dashboard</h2>
      
      <form onSubmit={handleSave} className="space-y-5 max-w-2xl">
        <div>
          <label className="block text-sm font-medium text-gray-700 mb-1">Cita-Cita (Goals)</label>
          <input 
            type="text" 
            className="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
            value={profile.cita_cita || ''}
            onChange={(e) => setProfile({...profile, cita_cita: e.target.value})}
            placeholder="E.g., Software Engineer"
          />
        </div>
        
        <div>
          <label className="block text-sm font-medium text-gray-700 mb-1">Bio</label>
          <textarea 
            className="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none min-h-[120px]"
            value={profile.bio || ''}
            onChange={(e) => setProfile({...profile, bio: e.target.value})}
            placeholder="Tell us about yourself..."
          ></textarea>
        </div>
        
        <div>
          <label className="block text-sm font-medium text-gray-700 mb-1">Profile Photo</label>
          <input 
            type="file" 
            accept="image/*"
            className="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
            onChange={(e) => setPhotoFile(e.target.files[0])}
          />
          {(photoFile || profile.foto) && (
            <div className="mt-4">
              <p className="text-sm text-gray-500 mb-2">Photo Preview:</p>
              <img 
                src={photoFile ? URL.createObjectURL(photoFile) : profile.foto} 
                alt="Profile" 
                className="w-24 h-24 object-cover rounded-full border shadow-sm" 
              />
            </div>
          )}
        </div>
        
        <button 
          type="submit" 
          disabled={saving}
          className="bg-blue-600 text-white font-medium px-6 py-2.5 rounded-lg hover:bg-blue-700 transition disabled:bg-blue-400"
        >
          {saving ? 'Saving...' : 'Save Profile'}
        </button>
      </form>
    </div>
  );
}
