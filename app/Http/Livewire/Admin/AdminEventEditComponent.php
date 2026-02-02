<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Denco;
use App\Models\Event;
use App\Models\Expo;
use App\Models\Location;
use App\Models\Pavillion;
use App\Models\Sector;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminEventEditComponent extends Component
{
    public $eventname;
    public $slug ;
   
    public $category_id;
    public $sector_id;
    public $expo_id;
    public $search_id;

    public $shtdesc;
    public $tagline;
    
    public $desc;
    
    public $email;
    public $phone;
    
    public $auidence;
    public $exhibitors;

    public $organizer;
    public $edition;
    public $startdate;
    public $enddate;
    public $event_id;
    public $link;

    public $eventype;
    public $city;
    public $country;
    public $venue;
    public $image;

    public $board;
    public $status;
    public $slyug;
    public $admstatus;
    public $user_id;
    public $reference;
    public $findidvenue;
    public $eventkhaname;
    public $organiser_id;
    public $start_date;
    public $end_date;


    public function generateSlug()
    {
        $this->slug = Str::slug($this->eventname,'-');
    }

    public function mount($event_id)
    {
        $fattribute = Event::find($event_id);
        $this->event_id = $fattribute->id;
        $this->eventname = $fattribute->eventname;
        $this->slug = $fattribute->slug;
        $this->eventype = $fattribute->eventype;

        $this->image = $fattribute->image;
       
        $this->city = $fattribute->city;
        $this->country = $fattribute->country;
        $this->venue = $fattribute->venue;

        $this->startdate = $fattribute->startdate;
        $this->enddate = $fattribute->enddate;        

        $this->shtdesc = $fattribute->shtdesc;
        $this->tagline = $fattribute->tagline;
        $this->organizer = $fattribute->organizer;

        $this->exhibitors = $fattribute->exhibitors;
        $this->desc = $fattribute->desc;
        $this->email = $fattribute->email;
        $this->phone = $fattribute->phone;
        $this->auidence = $fattribute->auidence;
        $this->edition = $fattribute->edition;
        $this->link = $fattribute->link;  
        $this->reference = $fattribute->reference;
        $this->organiser_id = $fattribute->organiser_id;
        $this->status = '1';     
    }

    public $selectedEvents = [];

    public function toggleEvent($eventId)
    {
        if (in_array($eventId, $this->selectedEvents)) {
            // unselect
            $this->selectedEvents = array_values(
                array_diff($this->selectedEvents, [$eventId])
            );
        } else {
            // select
            $this->selectedEvents[] = $eventId;
        }
    }

  
    public $venue_id;

    
        // ✅ ADD THIS METHOD
    public function updateSelectedEvents()
    {

        $this->validate([
            'startdate' => 'nullable|date',
            'enddate'   => 'nullable|date|after_or_equal:startdate',
            'venue_id'  => 'nullable|exists:locations,id',
        ]);

        if (empty($this->selectedEvents)) {
            session()->flash('error', 'No events selected');
            return;
        }

        $data = [];

        if ($this->start_date) {
            $data['startdate'] = $this->start_date;
        }

        if ($this->end_date) {
            $data['enddate'] = $this->end_date;
        }

        if ($this->venue) {
            $data['$location_id'] = $this->venue;
        }

        if (empty($data)) {
            session()->flash('error', 'Nothing to update');
            return;
        }

        Event::whereIn('id', $this->selectedEvents)->update($data);

        session()->flash('success', 'Selected events updated successfully');
    }
  

    public function updateEvent()
    {
        $fattribute = Event::find($this->event_id);
        $fattribute->eventname = Str::lower(trim($this->eventname));
        $fattribute->slug = trim($this->slug);
        $fattribute->eventype =  Str::lower(trim($this->eventype));

        $loc = Location:: where('id', $this->findidvenue)->first();
        $this->venue = $loc->venue;
        $this->city = $loc->city;
        $this->country = $loc->country;
       

        $fattribute->venue = trim($this->venue);
        $fattribute->city = trim($this->city);
        $fattribute->country = trim($this->country);
        $fattribute->location_id = $this->findidvenue;

        // $fattribute->country =  Str::lowertrim(trim($this->country));
        // $fattribute->city =  Str::lower(trim($this->city));
        // $fattribute->venue =  Str::lower(trim($this->venue));

        $fattribute->organizer = Str::lower(trim($this->organiser_id));

        $fattribute->shtdesc =  trim($this->shtdesc);
        $fattribute->tagline =  trim($this->tagline);
        $fattribute->desc =  trim($this->desc);

        $fattribute->exhibitors =  trim($this->exhibitors);
        $fattribute->auidence =  trim($this->auidence);
      
        $fattribute->email =  Str::lower(trim($this->email));
        $fattribute->phone =  trim($this->phone);

        $fattribute->edition =  trim($this->edition);
        $fattribute->startdate =  $this->startdate;
        $fattribute->enddate =  $this->enddate;
        $fattribute->link =  $this->link;
        $fattribute->save();
        session()->flash('message','Event has been updated succesfully!!');
        $this->CreateAutoDesc($this->event_id);
        return redirect()->route('adminevent.detail', ['slug' => $fattribute->slug]);
    }

    public function updateBasicEvent()
    {
        $fattribute = Event::find($this->event_id);
        $fattribute->eventname =  Str::lower(trim($this->eventname));
        $fattribute->slug = trim($this->slug);
        $fattribute->eventype =  Str::lower(trim($this->eventype));

        $loc = Location:: where('id', $this->findidvenue)->first();
        $this->venue = $loc->venue;
        $this->city = $loc->city;
        $this->country = $loc->country;
       

        $fattribute->venue = trim($this->venue);
        $fattribute->city = trim($this->city);
        $fattribute->country = trim($this->country);
        $fattribute->location_id = $this->findidvenue;
      
        // $fattribute->city =  Str::lower(trim($this->city));
        // $fattribute->country =  Str::lower(trim($this->country));
        // $fattribute->venue =  Str::lower(trim($this->venue));
       
        $fattribute->exhibitors =  trim($this->exhibitors);
        $fattribute->auidence =  trim($this->auidence);
      
        $fattribute->edition =  trim($this->edition);
        $fattribute->startdate =  $this->startdate;
        $fattribute->enddate =  $this->enddate;
        // $fattribute->country = $this->country;
        $fattribute->save();
        session()->flash('message','Event has been updated succesfully!!');
        $this->CreateAutoDesc($this->event_id);
        return redirect()->route('adminevent.detail', ['slug' => $fattribute->slug]);
    }

    public function doubleing()
    {
      
      $rti = Str::replace('  ',' ', $this->eventkhaname);
      $ret = explode(",", $rti);
    
      foreach($ret as $tre)
        {
          $doublse = new Event();
          
          $doublse->eventname = Str::lower(trim($tre));
          $doublse->city =  Str::lower(trim($this->city));
          $double = $doublse->eventname . ' ' . $doublse->city;
          $doublse->slug = Str::slug ($double,'-');

          $doublse->eventype = Str::lower(trim($this->eventype));


          $doublse->city =  Str::lower(trim($this->city));
          $doublse->country =  Str::lower(trim($this->country));
          $doublse->venue =  Str::lower(trim($this->venue));

          $doublse->exhibitors =  trim($this->exhibitors);
          $doublse->auidence =  trim($this->auidence);
          $doublse->edition =  trim($this->edition);
          $doublse->startdate =  $this->startdate;
          $doublse->enddate =  $this->enddate;

            $doublse->organizer = trim($this->organiser_id);

            $doublse->shtdesc =  trim($this->shtdesc);
            $doublse->tagline =  trim($this->tagline);
            $doublse->desc =  trim($this->desc);

            $doublse->email =  trim($this->email);
            $doublse->phone =  trim($this->phone);
            $doublse->link =  trim($this->link);
          
          $doublse->status = $this->status;
          $doublse->admstatus = '0';
          $doublse->user_id = Auth::user()->id;
          $doublse->organiser_id = $this->organiser_id;
          $doublse->reference = $this->reference;
          $doublse->save();
          $this->CreateAutoDesc($doublse->id);
        }
        return redirect()->back();
        ///return redirect()->route('adminevent.detail', ['slug' => $this->slug]);
    }

    public function locationdoubleing()
    {
      
      $rti = Str::replace('  ',' ', $this->eventkhaname);
      $ret = explode(",", $rti);
    
      foreach($ret as $tre)
        {
          $doublse = new Event();
          
          $doublse->eventname = Str::lower(trim($this->eventname));

          $doublse->city =  Str::lower(trim($tre));
          $double = $doublse->eventname . ' ' . $doublse->city;
          $doublse->slug = Str::slug ($double,'-');

          $doublse->eventype = Str::lower(trim($this->eventype));
          $doublse->image = $this->image;
          //$doublse->city =  Str::lower(trim($this->city));
          $doublse->country =  Str::lower(trim($this->country));
          $doublse->venue =  Str::lower(trim($this->venue));

          $doublse->exhibitors =  trim($this->exhibitors);
          $doublse->auidence =  trim($this->auidence);
          $doublse->edition =  trim($this->edition);
          $doublse->startdate =  $this->startdate;
          $doublse->enddate =  $this->enddate;

            $doublse->organizer = trim($this->organiser_id);

            $doublse->shtdesc =  trim($this->shtdesc);
            $doublse->tagline =  trim($this->tagline);
            $doublse->desc =  trim($this->desc);

            $doublse->email =  trim($this->email);
            $doublse->phone =  trim($this->phone);
            $doublse->link =  trim($this->link);
          
          $doublse->status = $this->status;
          $doublse->admstatus = '0';
          $doublse->user_id = Auth::user()->id;
          $doublse->organiser_id = $this->organiser_id;
          $doublse->reference = $this->reference;
          $doublse->save();
          $this->CreateAutoDesc($doublse->id);
        }
        return redirect()->back();
        // return redirect()->route('adminevent.detail', ['slug' => $this->slug]);
    }

    public function samenamediffcity()
    {
      
      $rti = Str::replace('  ',' ', $this->city);
      $ret = explode(",", $rti);
    
      foreach($ret as $ccity)
        {
          $doublse = new Event();
          
          $doublse->eventname = Str::lower(trim($this->eventkhaname));
          
          $doublse->slug = Str::slug ($doublse->eventname,'-');

          $doublse->eventype = Str::lower(trim($this->eventype));
          $doublse->city =  trim($ccity);
          $doublse->country =  Str::lower(trim($this->country));
          $doublse->venue =  Str::lower(trim($this->venue));
          $doublse->exhibitors =  $this->exhibitors;
          $doublse->auidence =  $this->auidence;
          $doublse->edition =  $this->edition;
          $doublse->startdate =  $this->startdate;
          $doublse->enddate =  $this->enddate;

            $doublse->organizer = Str::lower(trim($this->organizer));
            $doublse->shtdesc =  trim($this->shtdesc);
            $doublse->tagline =  trim($this->tagline);
            $doublse->desc =  trim($this->desc);

            $doublse->email =  $this->email;
            $doublse->phone =  $this->phone;
            $doublse->link =  $this->link;
          
          $doublse->status = $this->status;
          $doublse->admstatus = '0';
          $doublse->user_id = Auth::user()->id;
          $doublse->reference = $this->reference;
          $doublse->save();
          $this->CreateAutoDesc($doublse->id);
        }
        return redirect()->back();
        //return redirect()->route('adminevent.detail', ['slug' => $this->slug]);
    }



    public function editReference()
    {
      $referencefattribute = Event::find($this->event_id);
      $referencefattribute->reference = $this->reference;
      $referencefattribute->save();
      return redirect()->route('adminevent.detail', ['slug' => $this->slug]);
    }


    public $nowtime;
    
    public function CreateAutoDesc($id)
    {  
        $statementID = Event::find($id);
        $statementEventName = trim($statementID->eventname); 
        $statementEventVenue = trim($statementID->venue); 
        $statementEventCity = trim($statementID->city); 
        $statementEventType= trim($statementID->eventype); 
        $statementEventTagline = trim($statementID->tagline); 
        $statementEventStartDate = trim(Carbon::parse ($statementID->startdate)->format('D,d M Y')); 
        $statementEventEndDate = trim(Carbon::parse ($statementID->enddate)->format('D,d M Y'));
        
        $findCategory = Denco::where('event_id', $statementID->id)->first();

        if(empty($findCategory))
          { $getCategory = trim('Great Exhibition To Exhibit');}
        else
          { $getCategory = trim($findCategory->expo->tag);}

        $mytime = Carbon::today()->format("Y-m-d");
        $mymonth = Carbon::now()->addDays(3)->format("Y-m-d");

         //three months prior
         //$during =  'Join us at upcoming [exhibtion_type] [Exhibition Title], held from [Exhibtion start date] to [Exhibition End Date] at [Exhibtiion Venue]. Get your ticket now and be a part of the [tag] industry event.';

         //post Expo timer with dates
         //$end =  'Download business directory exhibition and find reference for expand your business. Share your reviews and rate your experience.';

         //post Expo timer with dates $statementEventName.''.$statementEventName 'public/exhibition/'.$eventoi->image
        $start = 'The '. $statementEventTagline. ' premier Great Exhibition to Exhibit certify ' .$statementEventType.' for ' .$getCategory.' industry professionals, entrepreneurs, and companies. Join us at upcoming ' .$statementEventType.' '.$statementEventName. ' held from ' .$statementEventStartDate. ' to '. $statementEventEndDate. ' at ' .$statementEventVenue.' '. $statementEventCity.' India. Discover new opportunities for collaboration, showcase your products or services and network with key players in your sector. Get your registration now and be a part of the industry event.';
         
        //$visited = User::find($id);
        $statementIoD = $statementID;
        $statementIoD->shtdesc = trim($start);
        $statementIoD->save();

         $this->emit('createcomment' ,('3'));

      //    $myytime = Carbon::today()->format('D,d M Y');
      //    $findstartdate = Carbon::($statementID->startdate)->format('D,d M Y');
      //    $mymonth = Carbon::now()->addDays(3)->format("Y-m-d");
          
      //    //between($statementEventStartDate, $statementEventEndDate)
      // if( $myytime  = $statementEventStartDate)
      //  {
      //    //$rti = Str::replace('exhibtion_type','$statementEventType', $start);
      //    $result = 'exhibition is awaiting to close deal'.$statementEventStartDate.'';

      //  }
      //  elseif ($myytime < $statementEventStartDate )
      //  {
      //    //$rti = Str::replace(' ','', $during);
      //    $result = 'advertise with us, book space upcoming expo';
      //  }
      //  elseif ($myytime > $statementEventEndDate )
      //  {
      //     $result = 'event has been closed find visitor list '.$statementEventEndDate.'';
      //  }
      
      // dd($myytime) ;
    }



    public function render()
    {
        $evento = Event::find($this->event_id);
        $cat = Category::get();
        $sec = Sector::get();
        $pavillion = Expo::get();
        $searchtag = Expo::get();

        if($evento->reference == 'null')
          {
            $relativeevent = 'Kindly update reference';
          }
        else
          {
            $relativeevent = Event::where('reference', $evento->reference)->orderBy('startdate','desc')->get();
          }
       

        return view('livewire.admin.admin-event-edit-component',['relativeevent' => $relativeevent, 'evento'=>$evento, 'searchtag'=>$searchtag,'pavillion'=>$pavillion,'sec'=>$sec,'cat'=>$cat])->layout('layouts.admin');
    }
}
