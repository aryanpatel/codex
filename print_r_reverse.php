Here is another version that parses the print_r() output. I tried the one posted, but I had difficulties with it. I believe it has a problem with nested arrays. This handles nested arrays without issue as far as I can tell. 
<?php
$array = "Array
(
    [quiz_id] => 7
    [quiz_name] => Test Audit
    [quiz_system] => 1
    [user_ip] => 43.228.228.55
    [user_name] => Leanmap
    [user_business] => None
    [user_email] => phpdev01.worldweb@gmail.com
    [user_phone] => None
    [user_id] => 93830
    [timer] => 398
    [time_taken] => 06:09:19 AM 02/09/2018
    [contact] => Array
        (
            [0] => Array
                (
                    [label] => Company 
                    [value] => Leanmap
                    [use] => name
                )

            [1] => Array
                (
                    [label] => Email
                    [value] => phpdev01.worldweb@gmail.com
                    [use] => email
                )

        )

    [total_points] => 91
    [total_score] => 0
    [total_correct] => 0
    [total_questions] => 20
    [question_answers_display] => 
    [question_answers_array] => Array
        (
            [0] => Array
                (
                    [0] => How are budgets defined? How well do people understand cost structure and allocations?
                    [1] => e) Teams fully control resources and budgets; able to define base, step, variable costs; drivers and allocations
                    [2] => 
                    [3] => 
                    [correct] => incorrect
                    [id] => 200
                    [points] => 5
                    [category] => Costing
                )

            [1] => Array
                (
                    [0] => What do most employees (80%) understand about value and waste? How is waste identified and reduced?
                    [1] => e) Holistic waste reduction program, systematically addressing inefficiencies in strategy, structure, business model
                    [2] => 
                    [3] => 
                    [correct] => incorrect
                    [id] => 206
                    [points] => 5
                    [category] => Efficiency
                )

            [2] => Array
                (
                    [0] => How is process inventory controlled? WIP refers to work in process.
                    [1] => e) Visual management is standard, no computer or reports required to control WIP
                    [2] => 
                    [3] => 
                    [correct] => incorrect
                    [id] => 212
                    [points] => 5
                    [category] => Inventory
                )

            [3] => Array
                (
                    [0] => How well is the factory layout optimized? Consider recent improvements, changes over the past 12 months.
                    [1] => e) Processes designed for continuous flow; quickly reconfigurable to changing needs; most hardware on wheels
                    [2] => 
                    [3] => 
                    [correct] => incorrect
                    [id] => 221
                    [points] => 5
                    [category] => Layout
                )

            [4] => Array
                (
                    [0] => How are priorities defined? Consider decisions by leaders responsible for budgets, resources, and results.
                    [1] => e) Priorities set by teams in alignment with strategy do not require approval; senior managers only provide guidance
                    [2] => 
                    [3] => 
                    [correct] => incorrect
                    [id] => 230
                    [points] => 5
                    [category] => Leadership
                )

            [5] => Array
                (
                    [0] => What is the average response time to major breakdowns? How long until a qualified person attends the problem?
                    [1] => e) Response within 2 minutes for 90% of all events; response time tightly controlled
                    [2] => 
                    [3] => 
                    [correct] => incorrect
                    [id] => 237
                    [points] => 5
                    [category] => Maintenance
                )

            [6] => Array
                (
                    [0] => How well are interfaces managed? How well do managers address cross-functional performance and issues?
                    [1] => e) Satisfaction index consistently top, internal issues treated as seriously as external ones, proactive towards risks
                    [2] => 
                    [3] => 
                    [correct] => incorrect
                    [id] => 245
                    [points] => 5
                    [category] => Management
                )

            [7] => Array
                (
                    [0] => How often is cross-functional performance reviewed? Only consider reviews by core team with formal protocol.
                    [1] => e) Performance continuously monitored, status transparent at all times; any deviation over 5% triggers formal action
                    [2] => 
                    [3] => 
                    [correct] => incorrect
                    [id] => 250
                    [points] => 5
                    [category] => Metrics
                )

            [8] => Array
                (
                    [0] => How is quality organized and embedded in the company structure?
                    [1] => e) Quality is part of corporate strategy and executive agenda; expert teams deployed to drive process excellence
                    [2] => 
                    [3] => 
                    [correct] => incorrect
                    [id] => 256
                    [points] => 5
                    [category] => Quality
                )

            [9] => Array
                (
                    [0] => How many resources have been committed to a continuous improvement? Consider projects and programs.
                    [1] => e) Program is part of strategy; senior managers involved beyond steering, remove barriers, solve structural issues
                    [2] => 
                    [3] => 
                    [correct] => incorrect
                    [id] => 264
                    [points] => 5
                    [category] => Readiness
                )

            [10] => Array
                (
                    [0] => How effectively is performance improved? What is the trend of key indicators in control of the team over the past 12 months?
                    [1] => e) All key indicators show favorable trend; improvement efforts deliver solid gains that outperform the market
                    [2] => 
                    [3] => 
                    [correct] => incorrect
                    [id] => 271
                    [points] => 5
                    [category] => Renewal
                )

            [11] => Array
                (
                    [0] => How many items are waiting in queue for the next step? Consider untouched parts, unread emails, pending tasks.
                    [1] => d) Work planned and completed daily per strict procedure; all planned tasks must be completed before going home
                    [2] => 
                    [3] => 
                    [correct] => incorrect
                    [id] => 274
                    [points] => 4
                    [category] => Service
                )

            [12] => Array
                (
                    [0] => How well do people understand problem solving? What tools and techniques are used to eliminate root-causes?
                    [1] => a) Problem solving methods unknown or not regularly practiced; no specific tools used, superficial knowledge
                    [2] => 
                    [3] => 
                    [correct] => incorrect
                    [id] => 282
                    [points] => 1
                    [category] => Solving
                )

            [13] => Array
                (
                    [0] => Who has the power to improve a process? Who has created and revised procedures in the past 12 months?
                    [1] => c) Supervisor or expert, one level separated from the work team
                    [2] => 
                    [3] => 
                    [correct] => incorrect
                    [id] => 285
                    [points] => 3
                    [category] => Standards
                )

            [14] => Array
                (
                    [0] => How well are locations defined? Can everyone recognize abnormalities, such as excess or missing items?
                    [1] => c) Cluster locations defined on surface level, such as cabinets and drawers labeled outside but unstructured inside
                    [2] => 
                    [3] => 
                    [correct] => incorrect
                    [id] => 296
                    [points] => 3
                    [category] => Structure
                )

            [15] => Array
                (
                    [0] => How well do people work together? Consider all employees who are part of a team, not working individually.
                    [1] => e) People depend and trust each other, treat group interests over self-interests, open doors and virtually no politics
                    [2] => 
                    [3] => 
                    [correct] => incorrect
                    [id] => 300
                    [points] => 5
                    [category] => Teamwork
                )

            [16] => Array
                (
                    [0] => How much monitoring is required to keep the team and operation running? What is the degree of automation?
                    [1] => e) Most processes or 90% run on one-cycle automation; operators just start processes without need for monitoring
                    [2] => 
                    [3] => 
                    [correct] => incorrect
                    [id] => 308
                    [points] => 5
                    [category] => Technology
                )

            [17] => Array
                (
                    [0] => How is pace of production set and adjusted? Takt refers to the rate of customer demand, time per unit.
                    [1] => e) Pace in sync with takt time through entire plant; resourced adjusted daily with effort on continuous balancing
                    [2] => 
                    [3] => 
                    [correct] => incorrect
                    [id] => 314
                    [points] => 5
                    [category] => Time
                )

            [18] => Array
                (
                    [0] => How versatile are skills? Do people strictly work in one area or do they gain experience in other areas?
                    [1] => e) People take pride in their capability and flexibility; most are certified at the master level in their respective jobs
                    [2] => 
                    [3] => 
                    [correct] => incorrect
                    [id] => 320
                    [points] => 5
                    [category] => Training
                )

            [19] => Array
                (
                    [0] => How many spaces are visually controlled? Consider physical storage locations for materials and information.
                    [1] => e) All locations demarcated (100%) for all items end-to-end; even visitors can quickly identify status, abnormalities
                    [2] => 
                    [3] => 
                    [correct] => incorrect
                    [id] => 324
                    [points] => 5
                    [category] => Visuals
                )

        )

    [comments] => 
);";
function print_r_reverse($in) {
    $lines = explode("\n", trim($in));
    if (trim($lines[0]) != 'Array') {
        // bottomed out to something that isn't an array
        return $in;
    } else {
        // this is an array, lets parse it
        if (preg_match("/(\s{5,})\(/", $lines[1], $match)) {
            // this is a tested array/recursive call to this function
            // take a set of spaces off the beginning
            $spaces = $match[1];
            $spaces_length = strlen($spaces);
            $lines_total = count($lines);
            for ($i = 0; $i < $lines_total; $i++) {
                if (substr($lines[$i], 0, $spaces_length) == $spaces) {
                    $lines[$i] = substr($lines[$i], $spaces_length);
                }
            }
        }
        array_shift($lines); // Array
        array_shift($lines); // (
        array_pop($lines); // )
        $in = implode("\n", $lines);
        // make sure we only match stuff with 4 preceding spaces (stuff for this array and not a nested one)
        preg_match_all("/^\s{4}\[(.+?)\] \=\> /m", $in, $matches, PREG_OFFSET_CAPTURE | PREG_SET_ORDER);
        $pos = array();
        $previous_key = '';
        $in_length = strlen($in);
        // store the following in $pos:
        // array with key = key of the parsed array's item
        // value = array(start position in $in, $end position in $in)
        foreach ($matches as $match) {
            $key = $match[1][0];
            $start = $match[0][1] + strlen($match[0][0]);
            $pos[$key] = array($start, $in_length);
            if ($previous_key != '') $pos[$previous_key][1] = $match[0][1] - 1;
            $previous_key = $key;
        }
        $ret = array();
        foreach ($pos as $key => $where) {
            // recursively see if the parsed out value is an array too
            $ret[$key] = print_r_reverse(substr($in, $where[0], $where[1] - $where[0]));
        }
        return $ret;
    }
}
