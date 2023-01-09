<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Repository\Contact\ContactRepository;
use App\Repository\Contact\ContactRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @property-read ContactRepository $repository
 */
class ContactController extends Controller
{
  public ContactRepositoryInterface $repository;

  /**
   * @param ContactRepositoryInterface $repository
   */
  public function __construct(ContactRepositoryInterface $repository)
  {
    $this->repository = $repository;
  }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $dataTable = $this->repository->datatable();
    return $dataTable->render('admin::contact.index');

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Application|Factory|View
   */
  public function create()
  {
    $contact = new Contact();
    return view('admin::contact.create', compact('contact'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param Request $request
   * @return RedirectResponse
   */
  public function store(Request $request)
  {

  }

  /**
   * Display the specified resource.
   *
   * @param Contact $contact
   * @return Application|Factory|View
   */
  public function show(Contact $contact)
  {
    return \view('admin::contact.show', compact('contact'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param Contact $contact
   * @return Application|Factory|View
   */
  public function edit(Contact $contact)
  {
    $contact = Contact::find($contact->id);

    return \view('admin::contact.edit', compact('contact'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param Request $request
   * @param Contact $contact
   * @return RedirectResponse
   */
  public function update(Request $request, Contact $contact)
  {

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param Contact $contact
   * @return RedirectResponse
   */
  public function destroy(Contact $contact)
  {
    $this->repository->delete($contact);
    alert()->success('contact', 'deleted');
    return back();
  }
}
