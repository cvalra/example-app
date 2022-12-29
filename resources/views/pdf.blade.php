<div class="manage-jobs-table table-responsive">
    <table border="1" >
        @foreach ($managecv as $managecvs)
            <tr style="background-color: black;">
                <th colspan="7" align="left" style="color: white;">{{ $managecvs->category }}</th>
               </tr>
               <tr>
             
                             <th style="text-align: center;" class="text-center">Date</th>
                             <th style="text-align: center;" class="text-center">Title</th>
                             <th style="text-align: center;" class="text-center">Participant</th>
                             <th style="text-align: center;" class="text-center">Theme</th>
                             <th style="text-align: center;" class="text-center">Level</th>
                             <th style="text-align: center;" class="text-center">Position</th>
                            
                            
                                          
                </tr>
                <?php $no =1; ?>
               <tr>
               <td>{{ $managecvs->date }}</td>
               <td>{{ $managecvs->title }}</td>
               <td>{{ $managecvs->participant }}</td>
               <td>{{ $managecvs->theme }}</td>
               <td>{{ $managecvs->level }}</td>
               <td>{{ $managecvs->position }}</td>
             
              
               {{-- <td>{{ $managecvs->participant }}</td>
               <td>{{ $managecvs->jobposition }}</td>
               <td>{{ $managecvs->venue }}</td>
               <td>{{ $managecvs->archievement }}</td>
               <td>{{ $managecvs->affiliation }}</td>
               <td>{{ $managecvs->valid_through }}</td>
               <td>{{ $managecvs->leader }}</td>
               <td>{{ $managecvs->article_type }}</td>
               <td>{{ $managecvs->author }}</td>
               <td>{{ $managecvs->publisher }}</td>
               <td>{{ $managecvs->sks }}</td>
               <td>{{ $managecvs->description }}</td>
               <td>{{ $managecvs->link }}</td> --}}



           @endforeach
        
    </table>
</div>