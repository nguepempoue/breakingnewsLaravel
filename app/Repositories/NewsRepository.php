<?php

namespace App\Repositories;

use App\Models\Country;
use App\Models\News;

class NewsRepository extends MainRepository
{

	public function getAll()
	{
		return News::get();
	}

	public function store(Array $inputs)
	{
		return News::create($inputs);
	}

	public function update($id, Array $inputs)
	{
		return News::find($id)->update($inputs);
	}

	public function destroy($id)
	{
		return News::destroy($id);
	}
}
