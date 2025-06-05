namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        // Hanya admin yang boleh akses halaman registrasi
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            abort(403, 'Hanya admin yang boleh mendaftarkan user baru.');
        }
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Hanya admin yang boleh mendaftarkan user baru
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            abort(403, 'Hanya admin yang boleh mendaftarkan user baru.');
        }
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);
        // Tidak auto-login user baru, tetap di halaman admin
        return redirect('/pengguna')->with('success', 'User baru berhasil didaftarkan!');
    }
}
