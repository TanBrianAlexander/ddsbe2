<?

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserJob extends Model {

    protected $table = "tbl_job";

    protected $fillable = ["job_id", "job_name",];

    public $timestamps = false;

    protected $primaryKey = "job_id";
}